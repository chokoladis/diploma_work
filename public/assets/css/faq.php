<style>
    .content{
        height: auto;
    }
    .content .img{
        background: url(img/ask.jpg) 0px -20vh;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 20vh;
        filter: grayscale(100%);
        z-index: 1;
        box-shadow: inset 0px 0px 30px rgb(32,32,32);
    }
    .title{
        font-size: 4vh;
        padding: 2vh;
        margin: 1vh;
        text-align: right;
        padding-right: 10%;
        position: relative;
        top: -15vh;
        position: relative;
        color: rgb(177, 77, 77);
        z-index: 50;
        border-right: 1vh solid;
        font-family: EFN Gradient Logo,century gothic,sans-serif;
    }
    .main{
        background: white;
        color: rgb(46, 46, 46);
        top: 0;
        padding: 2vh 1vh;
        position: relative;
        box-shadow: inset 0px 0px 10px;
        display: flex;
        flex-direction: row;
        width: 100%;
    }
    .categorys{
        width: 70%;
        display: flex;
        flex-direction: column;
    }
    .category_ask{
        margin: 1vh 0vh;
        width: 100%;
    }
    .title_category{
        display: flex;
        font-size: 3vh;
        background: rgb(224, 224, 224);
        border: 0.1vh solid rgb(141, 141, 141);
        color: rgb(100, 26, 26);
        padding: 1vh;
        cursor: pointer;
    }
    .title_category:hover{
        background: rgba(156, 183, 218, 0.603);
    }
    .asks{
        margin: 2vh;
        display: none;
    }
    .block_ask{
        display: flex;
        flex-direction: row;
        margin: 2.5vh 0vh;
    }
    hr{
        border: 0.2vh solid red;
        position: relative;
        background: red;
        display: block;
        width: 95%;
        margin: 0px auto;
    }
    .ask{
        font-weight: 600;
        width: 40%;
    }
    .answer{
        width: 60%;
        background: rgba(173, 193, 219, 0.384);
        padding: 2vh;
    }
    .send_ask{
        color: black;
        padding: 0vh 3vh;
        width: 35%;
        height: 100%;
        text-align: center;
    }
    .title_send_ask{
        font-size: 3.3vh;
        text-transform: uppercase;
        color: black;
    }
    .send_ask form{
        top: 7%;
        position: relative;
        width: 100%;
    }
    .send_ask input{
        width: 100%;
        padding: 1vh;
        border: 0px;
        box-sizing: border-box;
        color: black;
        background: rgb(236, 218, 218);
        margin: 1vh 0vh;
    }
    .send_ask textarea{
        width: 100%;
        padding: 1vh;
        border: 0px;
        box-sizing: border-box;
        color: black;
        background: rgb(236, 218, 218);
        margin: 1vh 0vh;
        height: 15vh;
    }
    .send_ask input[type="submit"]{
        padding: 1.5vh;
        border: 0px;
        box-sizing: border-box;
        color: black;
        text-transform: uppercase;
        color: white;
        background: rgba(155, 177, 209, 0.842);
    }
    .succes{
        font-size: 3vh;
        color: green;
        text-align: center;
    }
</style>