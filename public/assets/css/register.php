<style>
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
    .action .submit{
        width: 40%;
        height: 6%;
        margin-bottom: 1vh;
        background: rgba(245, 32, 32, 0.521);
        top: 3vh;
        position: relative;
        padding: 2vh 0vh;
        border-radius: 50px;
        left: 5vh;
        font-size: 2.5vh;
        box-shadow: 0px 0px 5px rgba(247, 50, 50, 0.623);
    }
    .action .submit:hover{
        box-shadow: 0px 0px 20px rgba(247, 50, 50, 0.723);
    }
    .action .submit input{
        background: rgba(0, 0, 0, 0);
        margin: 0;
        border: 0px;
        width: 100%;
        font-size: 3vh;
        color: rgb(255, 255, 255);
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