<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Inventory</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        li{
            list-style: none;
        }
        .container{
            width: 500px;
            margin: 50px auto;
        }
        .email-box{
            display: flex;
            flex-flow: column wrap;
            align-content: start;
            justify-content: start;
            text-align: center;
        }
        .email__header{
            height: 150px;
            background: rgb(5, 188, 201);
            color: rgb(245, 244, 244);
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;
            padding: 0px 20px;
        }

        .email__header h1{
            font-size: 40px
        }

        .email__body{
            text-align: left;
            background: rgb(240, 229, 229);
            padding: 50px 20px
        }

        .email__footer{
            background: rgb(5, 188, 201);
            padding: 30px 20px
        }

        .email__footer-head{
            font-size: 25px;
            font-weight: bold;
            color: #fff;
        }
        .email__social-list{
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin-top: 10px
        }

        .email__body-para{
            color: red
        }



    </style>
</head>

<body>
    <section class="email-sec">
        <div class="container">
            <div class="email-box">
                <div class="email__header">
                    <h1>Welcome to Inventory Menagment System</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam nesciunt </p>
                </div>
                <div class="email__body">
                    <h4 class="email__body-name">Hi {{ $data['name'] }}</h4>
                    <h5 class="email__body-head">Here is your all Account Access Keep it safe and secure</h5><br>
                    <p class="email__body-para">Do not share it with anyone</p>
                    <ul class="email__list">
                        <li class="email__item">Email:{{ $data['email'] }}</li>
                        <li class="email__item">Password:{{ $data['password'] }}</li>
                    </ul>
                </div>
                <div class="email__footer">
                    <div class="email__footer-head">Follow Us On</div>
                    <ul class="email__social-list">
                        <li class="email__social-item"><a href="#" class="email__social-link">Facebook</a></li>
                        <li class="email__social-item"><a href="#" class="email__social-link">Twitter</a></li>
                        <li class="email__social-item"><a href="#" class="email__social-link">Linkdin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
