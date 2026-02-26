<style>
    .offer_title{
        font-size: 5vh;
        font-family: eurofurence light,century gothic,sans-serif;
        text-transform: uppercase;
        color: red;
        margin: 3vh auto;
        text-shadow: 0px 0px 10px rgb(247, 141, 141);
        text-align: center;
        justify-content: center;
    }
    .offer_img{
        background: url(img/trek-code.jpg) center center / cover;
        background-repeat: no-repeat;
        width: 90%;
        height: 70%;
    }
    /*поиск*/
    .offer form{
        position: relative;
        width: 70vh;
        height: 30px;
        text-align: center;

        justify-content: center;
        align-items: center;
        margin: 0px auto;
    }

    #search{
        border: 0px;
        border-bottom: 1px red solid;
        outline: none;
        padding-left: 10px;
        width: 70%;
        top: 0vh;
        margin: 0;
        padding: 0;
        outline: none;
        color: white;
        background: transparent;
        position: relative;
        height: 100%;
        padding-left: 15px;
    }
    table{
        position: relative;
        width: 100%;
    }
    .trek{
        position: relative;
        padding: 2vh 0vh;
        width: 90%;
        text-align: center;
        margin: 0px auto;
    }
    .trek_title{
        font-size: 3vh;
        position: relative;
        text-align: center;
    }
    .trek .title{
        font-weight: 700;
        font-size: 2.2vh;
        padding-top: 4vh;
        position: relative;
    }
    .descr{
        font-size: 2vh;
    }
    .error{
        position: relative;
        top: 5vh;
        text-align: center;
        display: block;
        margin: 0px auto;
        height: 63vh;

    }
    .error span{
        position: relative;
        top: 5vh;
        font-size: 3vh;
    }
    .img img{
        filter: hue-rotate(180deg);
        height: 100%;
        box-shadow: 0px 0px 10px rgba(223, 44, 44, 0.856);
    }
    .img{
        height: 50vh;

    }
    .error .img p{
        position: absolute;
        text-align: center;
        width: 100%;
        font-size: 4vh;
        z-index: 10;
        text-shadow: 0px 0px 4px black;
    }
    .error .img .down {
        top: 40vh;
    }
    .btns{
        top: 4vh;
        position: relative;
        margin:10px auto;
        text-align: center;
    }
    .btns a{
        position: relative;
        cursor: pointer;
        font-size: 2vh;
        border: 2px solid white;
        padding: 5px 10px;
    }

    form.add_trek{
        width: 50%;
        height: auto;
        top: 10vh;
        position: relative;
    }
    .add_trek input{
        margin: 0;
        padding-left: 10px;
        border: 0px;
        border-radius: 40px;
        width: 100%;
        font-size: 2.2vh;
        color: rgb(192, 192, 192);
        height: 4%;
        border-radius: 40px;
        margin-bottom: 1vh;
        font-family: Candara, sans-serif;
        background: rgba(192, 192, 192, 0.39);
    }
    .forms{
        position: relative;
        width: 100%;
        height: 10%;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin: 0px auto;
        display: flex;
        padding: 3vh 0vh;
    }
    .forms .search{
        width: 70%;
        position: relative;
    }
    select {
        margin: 0;
        padding-left: 10px;
        border: 0px;
        border-radius: 40px;
        width: 100%;
        font-size: 2.2vh;
        color: rgb(192, 192, 192);
        height: 4%;
        border-radius: 40px;
        margin-bottom: 1vh;
        outline: none;
        font-family: Candara, sans-serif;
        background: rgba(192, 192, 192, 0.39);
    }
    .all_trek{
        left: 0;
        position: relative;
        width: 15vh;
        margin: 0;
    }
    .all_trek input[type="submit"]{
        border: 0px;
        padding: 5px 10px;
        border-radius: 40px;
        background: white;
        margin: 0;
        font-size: 2vh;
    }
    form.change_trek{
        width: 50%;
        height: auto;
        margin: 3vh auto;
        position: relative;
        display: flex;
        flex-direction: column;
    }
    form.change_trek input{
        margin: 0;
        padding-left: 10px;
        border: 0px;
        border-radius: 40px;
        width: 100%;
        font-size: 2.2vh;
        color: rgb(192, 192, 192);
        height: 4%;
        border-radius: 40px;
        margin-bottom: 1vh;
        font-family: Candara, sans-serif;
        background: rgba(192, 192, 192, 0.39);
    }
    form.change_trek input[type='submit']{
        margin: 0px auto;
        width: 50%;
        padding: 5px 10px;
        background: rgba(202, 10, 10, 0.548);
    }
    .content .offer input[type='submit']{
        margin: 0px auto;
        width: 50%;
        padding: 5px 10px;
        background: rgba(202, 10, 10, 0.548);
    }
    .slider form.search{
        margin-top: 5vh;
        margin-left: 10vh;
        position: relative;
    }
    .slider span{
        top: 5vh;
        left: 5vh;
        position: relative;
    }
    .alert{
        text-align: center;
    }
</style>