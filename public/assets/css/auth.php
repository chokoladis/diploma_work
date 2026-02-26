<style>
    @font-face{
        font-family: EFN Gradient Logo;
        src: url(font/13944.ttf);
    }
    .offer{
        font-family: EFN Gradient Logo,century gothic,sans-serif;
    }
    .title{
        cursor: default;
        width: 100%;
    }
    .title2 hr{
        width: 100%;
    }
    .title2 h2{
        font-size: 6vh;
    }
    .title2{
        left: 5vh;
        top: -3vh;
        position: relative;
    }
    .title2 h1{
        font-size: 12vh;
    }
    .vertical{
        transform: rotate(-90deg);
        color: white;
        opacity: 0.7;
        font-size: 3vh;
        width: 120px;
        height: 20px;
        left: -50px;
        top: 12vh;
        position: relative;
        font-weight: 500;
    }
    .title_order{
        text-shadow: 0px 0px 3px rgba(218, 161, 255, 0.459);
        color: transparent;
        background: url(/img/7HIt0xK.jpg) repeat;
        background-size: cover;
        -webkit-background-clip: text;
    }
    .title_order:hover{
        text-shadow: 0px 0px 30px rgba(218, 161, 255, 0.459);
    }

    .action {
        width: 50%;
        position: relative;
        height: auto;
        padding-left: 5%;
        padding-right: 5%;
        margin: auto;
    }
    .action form {
        width: 100%;
    }
    .action form * {
        font-family: Candara, sans-serif;
    }
    /**/
    .form-control {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin-bottom: 1vh;
    }
    /* подсветить иконку при заполнении */
    .action .input{
        width: 100%;
        height: 4%;
        border-radius: 40px;
        margin: 0;

        background: rgba(0, 0, 0, 0.1);
        display: flex;
    }
    .action .input img{
        width: 5vh;
        height: 5vh;
        border-radius: 30px;
        padding: 0;
        margin: 0;
    }
    .action .input input{
        background: rgba(0, 0, 0, 0);
        margin: 0;
        padding-left: 10px;
        border: 0px;
        border-radius: 40px;
        width: 100%;
        font-size: 2.2vh;
        color: rgb(105, 105, 105);
    }
    .action .input:hover{
        background: rgba(0,0,0,0.2);
        box-shadow: inset 0px 0px 1px rgba(0, 0, 0, 0.603);
    }
    .action .btn-group {
        width: fit-content;
        margin: 0px auto;
        margin-top: 20px;
    }
    .action .btn-group .submit {
        display: flex;
        align-items: center;
        background: rgba(245, 32, 32, 0.521);
        position: relative;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 16px;
        box-shadow: 0px 0px 5px rgba(247, 50, 50, 0.623);
        margin-right: 15px;
        cursor: pointer;
    }
    .action .btn-group .submit:last-of-type {
        margin: 0;
    }
    .action .submit:hover{
        background: white;
        color: red;
        box-shadow: 0px 0px 10px rgba(247, 50, 50, 0.723);
    }
    .action .submit *{
        font-weight: 700;
        background: rgba(0, 0, 0, 0);
        margin: 0;
        border: 0px;
        width: 100%;
        color: inherit;
    }

    .login_title{
        font-size: 4vh;
        color: rgb(54, 54, 54);
        background: rgb(200, 200, 200);
        border-radius: 50px;
        width: 5.5vh;
        justify-content: center;
        display: flex;
    }
    .errors{
        top: 5vh;
        position: relative;
        width: 35vh;
        color: red;
        padding: 2vh 0.5vh;
        border-radius: 0.5vh;
        border: 0.5vh solid white;
        font-size: 2vh;
        text-align: center;
    }
    .success{
        top: 5vh;
        position: relative;
        width: 35vh;
        color: green;
        padding: 2vh 0.5vh;
        border-radius: 0.5vh;
        border: 0.5vh solid white;
        font-size: 2vh;
        text-align: center;
    }
</style>