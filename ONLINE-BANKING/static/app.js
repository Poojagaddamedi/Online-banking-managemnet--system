/*class Chatbox{
    constructor(){
        this.args = {
            openButton: document.querySelector('.chatbox__button'),
            Chatbox: document.querySelector('.chatbox__support'),
            sendButton: document.querySelector('.send__Button')
        }
        this.state= false;
        this.messages=[];
    }
    display(){
        const{ openButton,Chatbox,sendButton}=this.args;
        openButton.addEventListener('click',  ()=> this.toggleState(ChatBox))
        sendButton.addEventListener('click',  ()=> this.onSendButton(ChatBox))

        const node=ChatBox.querySelector('input');
        node.addEventListener("keyup" ,({ key})=>{
            if(key === 'Enter'){
                this.onSendButton(ChatBox)
            }
        })
    }
      toggleState(ChatBox)
{
    this.state=!this.state;

    if(this.state){
        Chatbox.classList.add('chatbox--active')
    }else{
        Chatbox.classList.remove('chatbox--active')
    }

}
        onSendButton(chatbox){
            var textField = chatbox.querySelector('input');
            let text1=textField.value
            if(text1 ==""){
                return;
            }


            let msg1={name :"user", message:text1}
            this.messages.push(msg1);


            fetch($SCRIPT_ROOT + '/predict' , {
                method: 'POST',
                body: JSON.stringify({message: text1}),
                mode:'cors',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
            .then(r => r.json())
            .then(r => {
                let msg2={name:"Sam",message: r.answer};
                this.messages.push(msg2);
                this.updateChatText(chatbox)
                textField.value=''
                
            }).catch((error) => {
                console.error('Error:', error);
                this.updateChatText(chatbox)
                textField.value=""

            });

            }




    
        updateChatText(Chatbox)
        {
            var html='';
            this.messages.slice().reverse().forEach(function (item, number) {
               if(item.name === "Sam"){
                html+='<dic class=" messages__item messages__item --visitor">'+item.message+'</div>'
               } 
               else{
                html+='<dic class=" messages__item messages__item --operator">'+item.message+'</div>'

               }
            });

            const chatmessage = chatbox.querySelector('.chatbox__messages');
                chatmessage.innerHTML=html;
    }
}

const chatbox=new Chatbox();
chatbox.display();







class Chatbox {
    constructor() {
        this.args = {
            openButton: document.querySelector('.chatbox__button button'),
            chatbox: document.querySelector('.chatbox__support'),
            sendButton: document.querySelector('.send__button')
        }
        this.state = false;
        this.messages = [];
    }

    display() {
        const { openButton, chatbox, sendButton } = this.args;
        if (openButton) {
            openButton.addEventListener('click', () => this.toggleState(chatbox));
        } else {
            console.error('Open button not found');
        }
        if (sendButton) {
            sendButton.addEventListener('click', () => this.onSendButton(chatbox));
        } else {
            console.error('Send button not found');
        }

        const node = chatbox.querySelector('input');
        if (node) {
            node.addEventListener("keyup", ({ key }) => {
                if (key === 'Enter') {
                    this.onSendButton(chatbox);
                }
            });
        } else {
            console.error('Input field not found');
        }
    }

    toggleState(chatbox) {
        this.state = !this.state;

        if (this.state) {
            chatbox.classList.add('chatbox--active');
        } else {
            chatbox.classList.remove('chatbox--active');
        }
    }

    onSendButton(chatbox) {
        var textField = chatbox.querySelector('input');
        let text1 = textField.value;
        if (text1 === "") {
            return;
        }

        let msg1 = { name: "User", message: text1 };
        this.messages.push(msg1);

        fetch('/predict', {
            method: 'POST',
            body: JSON.stringify({ message: text1 }),
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(r => r.json())
        .then(r => {
            let msg2 = { name: "Sam", message: r.answer };
            this.messages.push(msg2);
            this.updateChatText(chatbox);
            textField.value = '';
        }).catch((error) => {
            console.error('Error:', error);
            this.updateChatText(chatbox);
            textField.value = '';
        });
    }

    updateChatText(chatbox) {
        var html = '';
        this.messages.slice().reverse().forEach(function (item) {
            if (item.name === "Sam") {
                html += '<div class="messages__item messages__item--visitor">' + item.message + '</div>';
            } else {
                html += '<div class="messages__item messages__item--operator">' + item.message + '</div>';
            }
        });

        const chatmessage = chatbox.querySelector('.chatbox__messages');
        chatmessage.innerHTML = html;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const chatbox = new Chatbox();
    chatbox.display();
});
*/
class Chatbox {
    constructor() {
        this.args = {
            openButton: document.querySelector('.chatbox__button button'),
            chatbox: document.querySelector('.chatbox__support'),
            sendButton: document.querySelector('.send__button')
        }
        this.state = false;
        this.messages = [];
    }

    display() {
        const { openButton, chatbox, sendButton } = this.args;
        if (openButton) {
            openButton.addEventListener('click', () => this.toggleState(chatbox));
        } else {
            console.error('Open button not found');
        }
        if (sendButton) {
            sendButton.addEventListener('click', () => this.onSendButton(chatbox));
        } else {
            console.error('Send button not found');
        }

        const node = chatbox.querySelector('input');
        if (node) {
            node.addEventListener("keyup", ({ key }) => {
                if (key === 'Enter') {
                    this.onSendButton(chatbox);
                }
            });
        } else {
            console.error('Input field not found');
        }
    }

    toggleState(chatbox) {
        this.state = !this.state;

        if (this.state) {
            chatbox.classList.add('chatbox--active');
        } else {
            chatbox.classList.remove('chatbox--active');
        }
    }

    onSendButton(chatbox) {
        var textField = chatbox.querySelector('input');
        let text1 = textField.value;
        if (text1 === "") {
            return;
        }

        let msg1 = { name: "User", message: text1 };
        this.messages.push(msg1);

        fetch('/predict', {
            method: 'POST',
            body: JSON.stringify({ message: text1 }),
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(r => r.json())
        .then(r => {
            let msg2 = { name: "Sam", message: r.answer };
            this.messages.push(msg2);
            this.updateChatText(chatbox);
            textField.value = '';
        }).catch((error) => {
            console.error('Error:', error);
            this.updateChatText(chatbox);
            textField.value = '';
        });
    }

    updateChatText(chatbox) {
        var html = '';
        this.messages.slice().reverse().forEach(function (item) {
            if (item.name === "Sam") {
                html += '<div class="messages__item messages__item--visitor">' + item.message + '</div>';
            } else {
                html += '<div class="messages__item messages__item--operator">' + item.message + '</div>';
            }
        });

        const chatmessage = chatbox.querySelector('.chatbox__messages');
        chatmessage.innerHTML = html;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const chatbox = new Chatbox();
    chatbox.display();
});

