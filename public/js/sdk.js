function BtyBug() {
    var c;
    var  login= {
        url: 'http://forms.albumbugs.com/oauth/authorize',
            data: {
            'client_id':this.c,
                'redirect_uri': 'http://www.albumbugs.com/callback',
                // 'access_token':null,
                'response_type': 'code',
                'scope': '*'
        }
    }
    this.init=function (a) {
        this.c = a;
        if (this.findGetParameter('code')) {
            my_window.clone();
        }
    }
   var callwindow= function () {
        console.log(this.login.data);
        this.my_window = window.open(this.login.url + '?' + $.param(this.login.data), "popupWindow", "width=600,height=600,scrollbars=yes");
    }

}
