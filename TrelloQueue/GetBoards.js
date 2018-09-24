appKey  = os.Getenv("TRELLO_APP_KEY");
token   = os.Getenv("TRELLO_TOKEN");
boardId = os.Getenv("Makerspace");

var api = 'f63368d1c6bdc8ea155a94784593dfe8';

// Get all of the information about the boards you have access to

var success = function(successMsg) {
  asyncOutput(successMsg);
};

var error = function(errorMsg) {
  asyncOutput(errorMsg);
};

Trello.get('/member/me/boards', success, error);