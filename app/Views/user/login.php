<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Login</title> 
     <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 350px;
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background: #1f5faa;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background: #333;
        }
    </style>
</head> 
<body> 
    <div id="login-wrapper"> 
            <h1>Sign In</h1> 
            <?php if(session()->getFlashdata('flash_msg')):?> 
                <div class="alert alert-danger"><?= session() ->getFlashdata('flash_msg') ?></div> 
            <?php endif;?> 
            <form action="<?= base_url('/user/login') ?>" method="post">
                <div class="mb-3"> 
                    <label for="InputForEmail" class="form-label">Email address</label> 
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>"> 
                </div> 
                <div class="mb-3"> 
                    <label for="InputForPassword" class="form-label">Password</label> 
                    <input type="password" name="password" class="form-control" id="InputForPassword"> 
                </div> 
                <button type="submit" class="btn btn-primary">Login</button> 
            </form> 
    </div> 
</body> 
</html> 
