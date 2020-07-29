<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
    margin-top: 9px;
    background-color:#f4f4f4;
    color:#555;
    font-family:Arial, Helvetica, sans-serif;
    font-size:20px;
    line-height:1.6em;
    margin:0;
    background-color: pink;
}

.container{
    width:25%;
    margin:auto;
    overflow:hidden;
    box-sizing: border-box;
    background-color: grey;
    position: relative;
    margin-top: 150px;
    padding: 30px;

    
}
#main{
    position: relative;
    float: right;
    margin-top: 15px;


}
#main p{
    font-size: 20px;
    font-weight: 900;
}

#main-header{
    background-color:grey;
    text-align: auto;
    margin-left: 20px;
    font-size: 20px;
    text-decoration-color: blue;
    
}


input[type=button]{
    background-color: white;
    width: 10%;
    font-size:20px;
    font-weight: 900;
    border-radius: auto;
    margin-left: 20px;
    margin-top: 10px;
    size: 440;
    margin-right: 10px;


}
input[type=text]{
    margin-right: 125px;
    padding-left: auto;
    margin-left: 20px;
    size: 150px;
    width: 200px;
    height: 30px;
    box-shadow: inset 0px 0px 10px;
    text-align: left;

}

        </style>
    </head>
    <body>
        <div class="container">
    <div class="body">
        <div id="main-header">
        <h1>Calculator</h1>
    </div>
    <table>
        <tr>
            <td colspan="4"> </td>
            <input type="text" name="number" id="display" ></tr> <br>
            <tr>
    
        <input type="button" name="one" type="1" value="1" onclick="calculator.number.value +='1'" dis>
        <input type="button"  name="two" value="2" onclick="calculator.number.value +='2'">
        <input type="button"  name="three" value="3" onclick="calculator.number.value +='3'">
        <input type="button"  name="plus" value="+" class="operator" onclick="calculator.number.value +='+'"><br>
    </tr>
    <tr>
        <input type="button"  name="four" value="4" onclick="calculator.number.value +='4'">
        <input type="button"  name="five" value="5" onclick="calculator.number.value +='5'">
        <input type="button"  name="six" value="6" onclick="calculator.number.value +='6'">
        <input type="button"  name="minus" value="-" class="operator" onclick="calculator.number.value +='-'"><br>
    </tr>

<tr>
        <input type="button"  name="seven" value="7" onclick="calculator.number.value +='7'">
        <input type="button"  name="eight" value="8" onclick="calculator.number.value +='8'">
        <input type="button"  name="nine" value="9" onclick="calculator.number.value +='9'">
        <input type="button"  name="mul" value="*" class="operator" onclick="calculator.number.value +='*'"><br>
    </tr>
    <tr>
        <input type="button"  name="clear" value="c" id="clear"  onclick="calculator.number.value =''">
        <input type="button"  name="zero" value="0" onclick="calculator.number.value +='0'">
        <input type="button"  name="equal" value="=" class="operator" onclick="calculator.number.value=eval(calculator.number.value)">
        <input type="button"  name="divide" value="/" class="operator" onclick="calculator.number.value +='/'"><br>
    </tr>

        
</table>
</div>
</div>
<div id=main></div>
</form>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
               

               
                   
                    
                </div>
            </div>
        </div>
    </body>
</html>
