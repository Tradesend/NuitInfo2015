// RTC view
// Create a rtc connection between someone asking for information (asker) and the person who created/is-located-at a disaster

// incl top bar & side bar
// with appropriate buttons

// use the chat module

// implements rtc

var RTCModule = (function() {
    var self = {};
    var _peer = new Peer({key: 'l2us4zvnfn56d2t9'});
    var _isWitness = false; // 
    var _contacts = {}; // username: key // witnesses if asker, askers if witness
    var _connections = {}; // key: connection

    var connect = function(username) {
	self.username = username;
	_peer.on('open', function(id) {
	    self._id = id;
	    console.log('My peer ID is: ' + id);
	    if (_isWitness) { true; } // send id to server	
	});

	_peer.on('disconnected', function() {
	    for (i = 0; _peer.disconnected && i < 4; i++) {
		setTimeout(function(){
		    _peer.reconnect();
		}, 2000);		
	    }
	    if (_peer.disconnected) {
		alert("Connection lost, refresh the page");
	    }
	});
    };

    self.connectAsAsker = function(username) {
	_isWitness = false;
	connect();
	// get contacts from server
    };

    self.connectAsWitness = function(username) {
	self.username = username;
	_isWitness = true;
	connect();
	self.waitForConnection();
	// send id to server
    };

    self.updateContacts = function() {
	true;
    };

    self.waitForConnection = function() {
	_peer.on('connection', function(conn) {
	    _contacts[conn.metadata] = conn.peer;
	    _connections[conn.peer] = conn.peer;
	    alert("User " + conn.metadata + " wants to speak with you");
	});
    };

    self.sendMessage = function(target, message) {
	if (! target in _contacts) {
	    self.updateContacts();
	}
	if (! target in _contacts) {
	    alert("User " + target + " not found.");
	    return;
	}
	if (! _contacts[target] in _connections || ! _connections[_contacts[target]].open) {
	    _connections[_contacts[target]] = _peer.connect(_contacts[target], [metadata: self.username]);
	}
	if (! _contacts[target] in _connections || ! _connections[_contacts[target]].open) {
	    alert("Couldn't connect with user " + target + ".");
	    return;
	}
	_connections[_contacts[target]].send(message);
    };

    self.quitConnection = function(username) {
	_connections[_connect[username]].close();
    };
    
    return self;
});
