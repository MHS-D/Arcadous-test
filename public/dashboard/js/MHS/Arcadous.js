//==================================== firebase Scripts ============================================================
var firebaseConfig = {
    apiKey: "AIzaSyBSd65kdPBtVm8pmcyY0s4M_c3ivL58ilQ",
    authDomain: "pushnotifications-80805.firebaseapp.com",
    projectId: "pushnotifications-80805",
    storageBucket: "pushnotifications-80805.appspot.com",
    messagingSenderId: "860416034306",
    appId: "1:860416034306:web:f89a8bdf6ab4ecac69891b",
    measurementId: "G-1XTEC0VLSD"
};


firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();


function startFCM() {
    messaging
    .requestPermission()
    .then(function () {
            return messaging.getToken()
        })
        .then(function (response) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route("dashboard.save-token") }}',
                type: 'POST',
                data: {
                    token: response
                },
                dataType: 'JSON',
                success: function (response) {
                    alert('Token stored.');
                },
                error: function (error) {
                    alert(error);
                },
            });
        }).catch(function (error) {
            alert(error);
        })

}

messaging.onMessage(function (payload) {
    const title = payload.notification.title;
    const options = {
        body: payload.notification.body,
        icon: payload.notification.icon,
    };
    new Notification(title, options);
});


$(document).ready(function() {
    startFCM();
});

function notifyUsers(){

    postAjax({}, route('dashboard.notify-users'));
}


