const clearText =()=>{
    return confirm('Are you sure you want to clear your post?');
}

const submitForm=()=>{
    const title = document.querySelector('.blog-title');
    const post = document.querySelector('.blog-post');

    document.querySelector('.add-post-form').addEventListener('submit', function(event){
    
        if(title.value === '' && post.value === ''){
            title.setAttribute("style", "box-shadow: 0 0 12px red;");
            post.setAttribute("style", "box-shadow: 0 0 12px red;");
            event.preventDefault();
        }
        else if(title.value === ''){
            title.setAttribute("style", "box-shadow: 0 0 12px red;");
            event.preventDefault();
        }
        else if(post.value === ''){
            post.setAttribute("style", "box-shadow: 0 0 12px red;");
            event.preventDefault();
        }
        
    })
}

const menuSlide = () =>{
    const hamBtn = document.querySelector('.ham');
    const line1 = document.querySelector('.ham span:first-child');
    const line2 = document.querySelector('.ham span:nth-last-child(2)');
    const line3 = document.querySelector('.ham span:last-child');
    const nav = document.querySelector('.nav-links');

    hamBtn.addEventListener('click',()=>{

        nav.classList.toggle('menu-active');
        line1.classList.toggle('navline1');
        line2.classList.toggle('navline2');
        line3.classList.toggle('navline3');
    });
}

menuSlide();