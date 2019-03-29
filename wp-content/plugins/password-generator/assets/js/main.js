function randomString(vall) {
    
    var UBoxCheck = document.getElementById("UBoxCheck");
    var LBoxCheck = document.getElementById("LBoxCheck");
    var NBoxCheck = document.getElementById("NBoxCheck");
    var SBoxCheck = document.getElementById("SBoxCheck");
    if(vall=='2'){
        NBoxCheck.checked = false;
        SBoxCheck.checked = false;
        NBoxCheck.disabled = true;
        SBoxCheck.disabled = true;
   
    }
    else if(vall=='option'){
        NBoxCheck.checked = false;
        SBoxCheck.checked = false;
        NBoxCheck.disabled = false;
        SBoxCheck.disabled = false;
       
    }
    else if(vall=='all'){
        NBoxCheck.disabled = false;
        SBoxCheck.disabled = false;
        UBoxCheck.checked  = true;
        LBoxCheck.checked  = true;
        NBoxCheck.checked  = true;
        SBoxCheck.checked  = true;
    }
    
    var mask      = '';
    var length    = document.getElementById("passLength").value; 
    
    if (UBoxCheck.checked == true) mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if (LBoxCheck.checked == true) mask += 'abcdefghijklmnopqrstuvwxyz';
    if (NBoxCheck.checked == true) mask += '0123456789';
    if (SBoxCheck.checked == true) mask += '~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';

    var result = '';
    for (var i = length; i > 0; --i) result += mask[Math.round(Math.random() * (mask.length - 1))];
    // return result;
    document.getElementById('code').innerHTML = result;
}


  var rangeSlider = function(){
      var slider  = $('.range-slider'),
          range   = $('.range-slider__range'),
          value   = $('.range-slider__dyn');
        
      slider.each(function(){

        value.each(function(){
          var value =range.val(this.value);
        });

        range.on('input',  function(){
          value.val(this.value);
          console.log(this.value)
        });
      });
      range.val(value.val());
    };

    setTimeout(rangeSlider,1000);



    function copyToClipboard(code) {

          // Create an auxiliary hidden input
          var aux = document.createElement("input");

          // Get the text from the element passed into the input
          aux.setAttribute("value", document.getElementById("code").innerHTML);

          // Append the aux input to the body
          document.body.appendChild(aux);

          // Highlight the content
          aux.select();

          // Execute the copy command
          document.execCommand("copy");

          // Remove the input from the body
          document.body.removeChild(aux);

    }

