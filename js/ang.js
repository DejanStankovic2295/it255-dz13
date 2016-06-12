var app = angular.module('Ang', []);
app.controller('AngCtrl', function($scope) {
    $scope.rooms = [{
        id: "1",
    	name: "Apartment I",
    	desc: "Apartment with stunning views on sea",
        meters: "36",
        beds: "5"
    }, {
        id: "2",
    	name: "Apartment II",
    	desc: "Apartment with jacuzzi",
        meters: "24",
        beds: "4"
    }, {
        id: "3",
    	name: "Room B",
    	desc: "Really big room",
        meters: "16",
        beds: "2"
    }];

    $scope.id = "";
    $scope.name = "";
    $scope.desc = "";
    $scope.meters = "";
    $scope.beds = "";

    $scope.addRoom = function() {
        $scope.rooms.push({id: $scope.id, name: $scope.name, desc: $scope.desc, meters: $scope.meters, beds: $scope.beds });
    };
});