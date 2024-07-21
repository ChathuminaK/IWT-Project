/* Javascript for signup page
get the details from user using queryselector */
const form=document.querySelector('#form');
const  Acctype=document.querySelector('#Acctype');
const uname=document.querySelector('#uname');
const email=document.querySelector('#email');
const password=document.querySelector('#password');
const cpassword=document.querySelector('#cpassword');
let success=true;

/* When the form is submitted, it calls the validateInputs() function to validate the form inputs. 
If the inputs are not valid, the default form submission is prevented using e.preventDefault(). */
form.addEventListener('submit',(e)=>{
    if(!validateInputs()){
        e.preventDefault();

    }
})

function validateInputs(){ 
    /* this function validate the user inputs and return with success */
    const AcctypeVal=Acctype.value.trim();
    const unameVal=uname.value.trim();
    const emailVal=email.value.trim();
    const passwordVal=password.value.trim();
    const cpasswordVal=cpassword.value.trim();

    if(AcctypeVal===''){
        success=false;
        seterror(Acctype,'Please Enter Your Account type')
    }

     else if (AcctypeVal === "buyer") {
        setSuccess(Acctype)
        
      } else if (AcctypeVal === "seller") {
        setSuccess(Acctype)
        
      } else {
        success=false;
        seterror(Acctype,'Invalid Account')
        alert("Invalid account type. Please enter 'buyer' or 'seller'.");
        
        
      }
    

   


    if(unameVal===''){
        success=false;
        seterror(uname,'Name is Required')
    }
    else{
        setSuccess(uname)
    }

    if(emailVal===''){
        success=false;
        seterror(email,'Email is Required')
    }

    else if(!validateEmail(emailVal)){
        success=false;
        seterror(email,'Please Enter a valid Email')
    }

    else{
        setSuccess(email)
    }

    if(passwordVal===''){
        success=false;
        seterror(password,'Password is Required')
    }

    else if(passwordVal.length<8){
        success=false;
        seterror(password,'Password mustbe atleast 8 charactors')
    }

    else{
        setSuccess(password)
    }

    if(cpasswordVal===''){
        success=false;
        seterror(cpassword,'please re-enter your password')
    }

    else if(cpasswordVal!==passwordVal){
        success=false;
        seterror(cpassword,'Password doesnot match')
    }

    else{
        setSuccess(cpassword)
    }

    return success;



}


function seterror(element,message){
    /* this fuction works on if there are error in user inputs*/
    const inputGroup= element.parentElement;
    const errorElement=inputGroup.querySelector('.error')

    errorElement.innerText=message;
    inputGroup.classList.add('error')
    inputGroup.classList.remove('success')


}

function setSuccess(element){
    /* this fuction works on user input correct information*/
    const inputGroup=element.parentElement;
    const errorElement=inputGroup.querySelector('.error')

    errorElement.innerText='';
    inputGroup.classList.add('success')
    inputGroup.classList.remove('error')
    

}

const validateEmail=(email)=>{
    /* check for correct email format*/
    return String(email)
    .toLowerCase()
    .match(
        /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    );
};


