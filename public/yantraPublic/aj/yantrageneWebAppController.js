myApp.controller("yantrageneController",function($scope){
	$scope.message="hello";
	var eId=0;
	$scope.nav=true;
	$scope.range = function(min,max){
		var input = [];
		for(var i=min;i<=max;i++){
			input.push(i);
		}
		return input;
	};
	$scope.regEvent = function () {
		alert("hello");
    };
	var events = {
	1:
	{'id':1,
	'name':'TEXPLORE',
	'teamSize':3,
	'desc':'This event involves two phases.\nPhase 1: Learning the technical details and functionality of software by your own.\nPhase 2: Solving the given problem on that software problem for Phase 2 will be given offer',
	'rules':[
	'Max 3 Candidates and a minimum of 1 Candidates are allowed in a team.',
	'Time allowed for Phase 1 will be 1 Hrs. and for Phase 2 will also be 1 Hr.',
	'There is a restriction on the Online Mode of Learning of software.',
	'The decisions of the judges is final.'
	],
	'cordinators':[
	{'name':'Naveen Chaurasiya','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
	{'name':'Shwatang Aggrawal','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
	],
	'judgingCriteria':[
	'Learning Aptitude',
	'Efficient Designing',
	'Problem Solving Approach'
	]
	},
	2:
	{
    'id':2,
    'name':'ALGOSENSE',
	'teamSize':3,
	'desc':'This is under process and fill by cordinators',
	'rules':['Rule 1','Rule 2','Rule 3','rules under process'],
	'cordinators':[
        {'name':'Naveen Chaurasiya','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
        {'name':'Shwatang Aggrawal','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
	],
	},
	3:{
		'id':3,
		'name':'ALGOSENSE(Juniors)',
		'teamSize':3,
        'desc':'This is under process and fill by cordinators',
        'rules':['Rule 1','Rule 2','Rule 3','rules under process'],
        'cordinators':[
            {'name':'Rohit Prakash Singh','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
            {'name':'Arpit','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
        ],
	},
	4:{
		'id':4,
		'name':'DIJICANVA',
		'teamSize':3,
        'desc':'This is under process and fill by cordinators',
        'rules':['Rule 1','Rule 2','Rule 3','rules under process'],
        'cordinators':[
            {'name':'Naveen Chaurasiya','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
            {'name':'Shwatang Aggrawal','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
        ],
	},
	5:{
		'id':5,
		'name':'APPMANIA',
		'teamSize':3,
        'desc':'This is under process and fill by cordinators',
        'rules':['Rule 1','Rule 2','Rule 3','rules under process'],
        'cordinators':[
            {'name':'Rohit Prakash Singh','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
            {'name':'Arpit','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
        ],
	},
	6:{
		'id':6,
		'name':'WEBBIT',
		'teamSize':3,
        'desc':'This is under process and fill by cordinators',
        'rules':['Rule 1','Rule 2','Rule 3','rules under process'],
        'cordinators':[
            {'name':'Rohit Prakash Singh','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
            {'name':'Arpit','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
        ],
	},
	7:
	{'id':7,'name':'APPDROID',
	'teamSize':4,
	'desc':'This is Texplore',
	'rules':['Rule 1','Rule 2','Rule 3'],
	'cordinators':[
	{'name':'Arpit Srivastava','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
	{'name':'Ankit Srivastava','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
	{'name':'Amit Srivastava','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'},
	{'name':'Aman Srivastava','class':'CSE A 3rd Yr','contactNo':'9876543210','imageName':'cordinator.png','fbLink':'https://fb.com','gpLink':'https://google.com'}
	]
	},
	8:
	{'id':8,'name':'ZUMO WAR',
	'teamSize':5,
	'desc':'Zumo War, a very amusing event is a sumo match of robots, in which a player must fix a light weight metal plate on the front of robot to push its opponent outside of arena.',
	'rules':[
	'The maximum no. of participants allowed in a team is 5.',
	'Participants from different colleges can form a team and more than one team is allowed from a particular college but one student can’t be part of more than one team in one event.',
	'Dimensions of robot must not exceed 35x35x35cm (lxbxh).',
	'The weight of robot must not exceed 1kg.',
	'The thickness of the wheel used in robot must not exceed 3cm.',
	'The power supply used by a robot must not exceed 18 volt and 4 ampere, so try to use small motors to avoid large current consumptions i.e. BO motors.',
	'Robot must be strictly Wireless or you can use autonoums robot.',
	'The robot is controlled by 8-bit microcontroller only board like Arduino is allowed, microprocessor based bots like controlled by Raspberry pi are not allowed.',
	'One must push opponent’s robot from front side using metal plate, if any robot pushed another from back or any other side team will get a negative point.',
	'You have to only push the robot outside; if any robot damages the opponent’s bot then team will get negative point.',
	'If any robot will cause damage to the arena it will be marked as disqualified or will be given negative points.',
	'If there is violation of any of the rule, the team will be disqualified.'
	],
	'cordinators':[
	{'name':'Anupriya Shukla','class':'EC A 3rd Yr','contactNo':'9169755919','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
	{'name':'Shubham Pathak','class':'EC A 3rd Yr','contactNo':'9506136009','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
	{'name':'shudhanshu Agrawal','class':'EC A 3rd Yr','contactNo':'7617824670','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
	],
	'videos':[
	'kewza7RyKMQ',
	'8pEOUdUndys',
	'UyC9dV7ZIoI'
	]
	},
	9:{
		'id':9,
		'name':'ROBO BALLOON FIGHT',
		'teamSize':5,
		'desc':'This event is new and yet most funny and exciting. As the name suggest you need to create a wireless robot and to fit a needle or little spear on the front side and paste a balloon on the back side of your robot and try to pierce opponent’s balloon in order to win.',
		'rules':[
		'The maximum no. of participants allowed in a team is 5.',
		'Participants from different colleges can form a team and more than one team is acceptable from any particular college but one student can’t be a part of more than one team in one event.',
		'Dimensions of robot must not exceed 35x35x35cm (lxbxh).',
		'The weight of robot must not exceed 1kg.',
		'The length of spear or needle must be constant and must not exceed 12cm.',
		'The power supply used by a robot must not exceed 18 volt and 4 ampere, so try to use small motors to avoid large current consumptions i.e. BO motors.',
		'The thickness of the wheel used in robot must not exceed 3cm.',
		'Robot must be strictly Wireless.',
		'The robot is controlled by only 8-bit microcontroller only like arduino, microprocessor like raspberry pi are not allowed.',
		'If you robot will damage the arena it will be mark as disqualified or you’ll be given negative points.',
		'If there is violation of any of the rule, the team will be disqualified.'
		],
		'cordinators':[
		{'name':'Shubham Shukla','class':'EC A 3rd Yr','contactNo':'8181808735','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Megha rao','class':'EC A 3rd Yr','contactNo':'','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Sagar Sharma','class':'EC A 3rd Yr','contactNo':'','imageName':'cordinator.png','fblink':'#','gpLink':'#'}
		],
		'videos':[
		'kewza7RyKMQ',
		'atd8bESoQkc',
		'Nzpkl2FTd_k'
		]
	},
	10:{
		'id':10,
		'name':'ROBO SOCCER',
		'teamSize':5,
		'desc':'Fever of soccer is blowing everybody’s mind these days so why do technocrats should be left behind to showcase their sporting skills? We at YANTRAGENE are giving opportunity to the electronics enthusiastic to prove their talent but without their physical strength but by guiding their ROBOTS to score goals for them.',
		'rules':[
		'The maximum no. of participants allowed in a team is 5 with maximum of 4 bots.',
		'At a time 3 robots will be allowed by a team in the soccer arena remaining 1 bots will be in standby.',
		'Participants from different colleges can form a team also more than one team is acceptable from a particular college but one student can’t be a part of more than one team in one event.',
		'Dimensions of robot must not exceed 35x35x35cm (lxbxh).',
		'The weight of robot must not exceed 1kg.',
		'The thickness of the wheel used in robot must not exceed 3cm.',
		'Robot must be manual, autonoums robots are not allowed.',
		'2 out of 3 robots must be wireless and remaining 1 could be wired or wireless'		],
		'cordinators':[
		{'name':'Sagar Sharma','class':'EC A 3rd Yr','contactNo':'8604866793','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Anupriya Shukla','class':'EC A 3rd Yr','contactNo':'9169755919','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Shivam Sahu','class':'EC A 3rd Yr','contactNo':'9792977962','imageName':'cordinator.png','fblink':'#','gpLink':'#'}
		],
		'videos':[
		'kewza7RyKMQ',
		'TE1qY4_GEwK'
		]
	},
	11:{
		'id':11,
		'name':'ROBO RACE',
		'teamSize':5,
		'desc':'Robotics events feel incomplete without a robotic race so here it is. In the race the robots must have to pass through the obstacles in the track in least possible time in order to win the race.',
		'rules':[
		'The maximum no. of participants allowed in a team is 5.',
		'Participants from different colleges can form a team and more than one team is acceptable from any particular college but one student can’t be a part of more than one team in one event.',
		'Dimensions of robot must not exceed 35x35x35cm (lxbxh).',
		'The weight of robot must not exceed 1kg.',
		'The length of spear or needle must be constant and must not exceed 12cm.',
		'The power supply used by a robot must not exceed 18 volt and 4 ampere, so try to use small motors to avoid large current consumptions i.e. BO motors.',
		'The thickness of the wheel used in robot must not exceed 3cm.',
		'Robot must be strictly Wireless.',
		'The robot is controlled by only 8-bit microcontroller only like arduino, microprocessor like raspberry pi are not allowed.',
		'If you robot will damage the arena it will be mark as disqualified or you’ll be given negative points.',
		'If there is violation of any of the rule, the team will be disqualified.'
		],
		'cordinators':[
		{'name':'Sakshi Srivastava','class':'EC A 3rd Yr','contactNo':'7275811058','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Shubham Singh Rathore','class':'EC A 3rd Yr','contactNo':'8173866255','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Anand Prakash','class':'EC A 3rd Yr','contactNo':'9807736649','imageName':'cordinator.png','fblink':'#','gpLink':'#'}
		],
		'videos':[
		'kewza7RyKMQ'
		]
	},
	12:{
		'id':12,
		'name':'DCTRONIX',
		'teamSize':5,
		'desc':'If you love electronics then this event is made for you. In this event you’ll given basic components such as transistors or IC’s along with the manual and you’ve to make something different and better using these basic components.',
		'rules':[
		'The maximum no. of participants allowed in a team is 5.',
		'Participants from different colleges can form a team and more than one team is acceptable from any particular college but one student can’t be a part of more than one team in one event.',
		'The components will be provided by us.',
		'The event contains 2 rounds, in 1st round transistors will be provided and for 2nd round IC will be provided.',
		'If there is violation of any of the rule, the team will be disqualified.'
		],
		'cordinators':[
		{'name':'Prerna Sahu','class':'EC A 3rd Yr','contactNo':'7275811058','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Amit Kumar Patel','class':'EC A 3rd Yr','contactNo':'8090505687','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Vishal Dixit','class':'EC A 3rd Yr','contactNo':'8604956370','imageName':'cordinator.png','fblink':'#','gpLink':'#'}
		]
		},
	13:{
		'id':13,
		'name':'EMBEDDEDUINO',
		'teamSize':5,
		'desc':'For the creative and innovative minds embeddeduino is a best platform to showcase and enhance your skills. You’ve to use An Arduino Uno (or any arduino would work) and create something innovative.',
		'rules':[
		'The maximum no. of participants allowed in a team is 5.',
		'Participants from different colleges can form a team and more than one team is acceptable from a particular college but one student can’t be a part of more than one team in one event.',
		'Microcontroller board other than arduino will be rejected and homemade microcontroller board with arduino bootloader will be accepted.',
		'Every team will be given 15 minutes to prepare, 10 minutes for presentation and 5 minutes for demonstration.',
		'Low Power consumption, low cost and extra features will help you gain extra marks.',
		'You must carry your own power supply, no supply will be provided.',
		'Your project must be different from conventional/regular projects.',
		'If there is any violation of any rule found by your robot or your team, your team will be mark as disqualified.'
		],
		'cordinators':[
		{'name':'Akshita Srivastava','class':'EC A 3rd Yr','contactNo':'7376547776','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Shubham Shukla','class':'EC A 3rd Yr','contactNo':'8181808735','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		{'name':'Sagar Sharma','class':'EC A 3rd Yr','contactNo':'8604866793','imageName':'cordinator.png','fblink':'#','gpLink':'#'},
		]
		},
	14:{'name':'TECHY-SHOT'},
	15:{'name':'HYDRAULIC ARMS'},
	16:{'name':'BRIDGE CREATIVITY'},
	17:{'name':'CONTRAPTION'},
	18:{'name':'AD-MAD SHOW'},
	19:{'name':'PLAN-B'},
	20:{'name':'NEED FOR SPEED'},
	21:{'name':'Counter Strike'}
	};

	$scope.ShowId = function(event){
		eId = event.target.id;
		$scope.event = events[eId];
		$scope.details = events[eId]['desc'];
	};
	$scope.EventDesc = function(){
		$scope.details = events[eId]['desc'];
	};
	
	$scope.EventRar = function(){
		$scope.details = events[eId]['rules'];
	};
});
