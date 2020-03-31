var app = angular.module('marequete', []);

app.controller('AdminCtrl', function($scope,$http){
		    $http({
            method: 'POST',
            url: '/requete',
            }).then(
			function(res){

				$scope.requetes = res.data.requetes

				console.log($scope.requetes)
			},
			function(error) {
				console.log(error)
			});


	console.log('iciiii')	

});
app.controller('HomeCtrl', function($scope){

    console.log("app deploy")


    function readURLQ1(input) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	        $('#imagePreviewQ1').css('background-image', 'url('+e.target.result +')');
	        $('#imagePreviewQ1').hide();
	        $('#imagePreviewQ1').fadeIn(650);
	    }
	    reader.readAsDataURL(input.files[0]);
	}
	}
	$("#quitus1").change(function() {
	    readURLQ1(this);
	});

    function readURLR1(input) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	        $('#imagePreviewR1').css('background-image', 'url('+e.target.result +')');
	        $('#imagePreviewR1').hide();
	        $('#imagePreviewR1').fadeIn(650);
	    }
	    reader.readAsDataURL(input.files[0]);
	}
	}
	$("#recu1").change(function() {
	    readURLR1(this);
	});

    function readURLQ2(input) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	        $('#imagePreviewQ2').css('background-image', 'url('+e.target.result +')');
	        $('#imagePreviewQ2').hide();
	        $('#imagePreviewQ2').fadeIn(650);
	    }
	    reader.readAsDataURL(input.files[0]);
	}
	}
	$("#quitus2").change(function() {
	    readURLQ2(this);
	});

    function readURLR2(input) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	        $('#imagePreviewR2').css('background-image', 'url('+e.target.result +')');
	        $('#imagePreviewR2').hide();
	        $('#imagePreviewR2').fadeIn(650);
	    }
	    reader.readAsDataURL(input.files[0]);
	}
	}
	$("#recu2").change(function() {
	    readURLR2(this);
	});


});



