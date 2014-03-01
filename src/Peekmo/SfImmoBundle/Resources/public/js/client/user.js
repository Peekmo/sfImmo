/**
 * Created by peekmo on 3/1/14.
 */

app.controller('Connexion', ['$scope', 'proxy', function ($scope, proxy) {
    $scope.logindata = {
        email: 'test@test.fr',
        password: 'rltisv'
    }

    $scope.error = '';

    $scope.login = function() {
        console.log('ok')
        proxy.post('/user/login', $scope.logindata, function(data){
            console.log(data);
           if (!data.success) {
               $scope.error = data.message;
           }
        });
    }
}]);