
let prompt=document.querySelector(".prompt")
let container=document.querySelector(".container")
let chatContainer=document.querySelector(".chat-container")
let btn=document.querySelector(".btn")
const wrapper = document.querySelector('.wrapper');

let userMessage=null;


let  API_URL='https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=AIzaSyAmMY0HK0Movb9tX8FWmmw1fGk8sZNImWA'
 function createChatBox(html,className){
const div=document.createElement("div")
div.classList.add(className)
div.innerHTML=html;
return div
}
async function generateApiResponse(aiChatBox){
const textElement=aiChatBox.querySelector(".text")
try{
const response=await fetch(API_URL,{
  method:"POST",
  headers:{"Content-Type": "application/json"},
  body:JSON.stringify({
    contents:[{
      "role": "user",
      "parts":[{text:`${userMessage} in 10 words`}]
    }]
  })
})
const data=await response.json()
const apiResponse=data?.candidates[0].content.parts[0].text.trim();
textElement.innerText=apiResponse

}
catch(error){
  console.log(error)
}
finally{
  aiChatBox.querySelector(".loading").style.display="none"
}
}
function showLoading(){
  const html=` <div id="img">
        <img src="ai.png" alt="">
    </div>
    <div class="text">
    </div>
    <img src="loading.gif" alt="" height="50" class="loading">`
    let aiChatBox=createChatBox(html,"ai-chat-box")
 chatContainer.appendChild(aiChatBox)
generateApiResponse(aiChatBox)

}

btn.addEventListener("click",()=>{
    userMessage=prompt.value;
    if(prompt.value ===""){
      container.style.display="flex"
    }else{
       container.style.display="none"
    }
    if(!userMessage)return;
  const html=` <div id="img">
        <img src="user.png" alt="">
    </div>
    <div class="text">
    </div>`
 let userChatBox=createChatBox(html,"user-chat-box")
 userChatBox.querySelector(".text").innerText=userMessage
 chatContainer.appendChild(userChatBox)
 prompt.value=""
 setTimeout(showLoading,1000)

 const loginLink = document.querySelector('.login-link');
const registerlink = document.querySelector('.register-link');
const btnPopup= document.querySelector('.btnLogin-popup');
const iconClose= document.querySelector('.icon-close');

registerlink?.addEventListener('click',() => {wrapper.classList.add('active');});
loginLink?.addEventListener('click', () => {wrapper.classList.remove('active');});
btnPopup?.addEventListener('click', () => {wrapper.classList.add('active-popup');});
iconClose?.addEventListener('click', () => {wrapper.classList.remove('active-popup');});


  });
