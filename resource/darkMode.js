function toggleDarkLight(){
    var body = document.getElementById("body");
    var currentClass = body.className;
    body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
  }

  function toggleDarkLight2(){

    // if (document.getElementById('profile')) {
    //   let bodyProfile = document.getElementById("profile");
    //   let currentClassProfile = bodyProfile.className;
    //   bodyProfile.className = currentClassProfile == "dark-mode" ? "light-mode" : "dark-mode";
    // }else{
      if (document.getElementById('profile-page')) {
        var body = document.getElementById('profile');
        let currentClass = body.className;
        body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
        body=document.getElementById('profile-page');
        currentClass = body.className;
        if (currentClass=='profile-page dark-mode') {
           body.classList.remove("dark-mode");
        }else{
          body.classList.add("dark-mode");
        }
        
      }else{
        body = document.getElementById("body");
        let currentClass = body.className;
        body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
      }
    //}
    if(document.getElementById('ifrm')){
      let ifrm = document.getElementById('ifrm')
      let win = ifrm.contentWindow; // reference to iframe's window
      // reference to document in iframe
     let doc = ifrm.contentDocument? ifrm.contentDocument:
         ifrm.contentWindow.document;
       // reference to form named 'demoForm' in iframe
     let form = doc.getElementById('body');
     let classIfrm = form.className;
     form.className =classIfrm== "dark-mode" ? "light-mode" : "dark-mode";
    }
   
  }