
import boto
import time
from boto.ec2.regioninfo import RegionInfo

#connect the cloud with EC2
region=RegionInfo(name='melbourne', endpoint='nova.rc.nectar.org.au')

access_key = "eb0444bb655d450f90178aced766fc3e"
secret_key = "a436033500bd461f844d81e429168753"

ec2_conn = boto.connect_ec2(aws_access_key_id=access_key, 
		aws_secret_access_key=secret_key, is_secure=True, region=region, port=8773, 
			path='/services/Cloud', validate_certs=False)
			
#create security groups
automation = ec2_conn.create_security_group('automation','automatic security group');
automation.authorize('tcp', 80, 80, '0.0.0.0/0')
automation.authorize('tcp', 22, 22, '0.0.0.0/0')
automation.authorize('tcp', 5984, 5984, '0.0.0.0/0')

# initialize instance and volume
instNum = 2
for k in range(instNum):
	#launch instances
	ec2_conn.run_instances(image_id='ami-00003720', key_name='feng', instance_type='m2.medium', security_groups=['automation'],placement='melbourne-np')
	#create volumes
	vol_req = ec2_conn.create_volume(10,"melbourne-np")

reservations = ec2_conn.get_all_reservations()

#get instance objects, IDs, IPs and status
instances = [i for r in reservations for i in r.instances]
instIDs = [i.id for i in instances]
instIPs = [i.ip_address for i in instances]
instSta = [i.state for i in instances]


	

# function of checking status of instance and return a boolean	
def checkSame(a):
	count = 0
	judge = None
	for i in range(len(a)):
		if (a[0] == a[i]) and (a[0] == 'running'):
			count += 1
	if count == len(a):
		judge = True
	else:
		judge = False
	return judge

# check the instance status and sleep 1 min if not all running 

while True:
	reservations = ec2_conn.get_all_reservations()
	instances = [i for r in reservations for i in r.instances]
	instSta = [i.state for i in instances]
	if checkSame(instSta):
		break
	else:
		time.sleep(30)


instances = [i for r in reservations for i in r.instances]
instIDs = [i.id for i in instances]

print(instIDs)

#get all the volume IDs
volIDs = []
curr_vol = ec2_conn.get_all_volumes()
for volid in curr_vol:
	volIDs.append(volid.id)

print(volIDs)
# if all instance running, attack volumes to corresponding instances

for k in range(instNum):
	print("volume", volIDs[k], "instance",instIDs[k])
	ec2_conn.attach_volume(volIDs[k],instIDs[k],'/dev/vdb')
	

instIPs = [i.ip_address for i in instances]

print instIPs

testIPs = instIPs[0:2]
	
# write the host ip_address as a file for ansible to implement
hostPath = r'/Users/fengsiyu/Desktop/Second Semester/Cluster and Cloud Computing/Assignment2/automation/testHost'
with open(hostPath, 'w') as f:
	content = '[cloudHost]\n'+'\n'.join(testIPs)+'\n'
	f.write(content)