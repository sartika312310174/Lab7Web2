<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
     <style>
        
        body {
        line-height: 1;
        font-size: 100%;
        font-family: 'Open Sans', sans-serif;
        color: #5a5a5a;
        }

        #container {
            width: 980px;
            margin: 0 auto;
            box-shadow: 0 0 1em #cccccc;
        }

            /* header */
        header {
            padding: 20px;
        }

        header h1 {
            margin: 20px 10px;
            color: #b5b5b5;
        }

            /* navigasi */
        nav {
            display: block;
            background-color: #1a3ca3;
        }

        nav a {
            padding: 15px 30px;
            display:inline-block;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }

        nav a.active,
        nav a:hover {
            background-color: #2b83ea;
        }

        #wrapper {
            padding: 30px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color:rgb(72, 95, 179);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #6c757d; /* abu-abu */
            color: white;
        }

        .btn-hapus {
            background-color: #dc3545; /* merah */
            color: white;
        }

        .table td {
            padding: 8px 15px;
            }

        .table td:nth-child(3) {
                padding-right: 20px;
            }

            
        .table th, .table td {
            vertical-align: middle;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 0.85rem;
        }

        .table thead {
            background-color: #f8f9fa;
        }

        .table tbody tr:hover {
            background-color:rgb(227, 225, 225);
        }

 

        .spinner {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #007bff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 0.8s linear infinite;
            margin: auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }


        footer {
        clear:both;
        background-color: #1d1d1d;
        padding: 20px;
        color: #eee;
        padding: 10px;
        width: 98%;
            }
    </style>
</head>
<body>
    <div id="container">
    <header>
    <h1>Admin Portal Berita</h1>
    </header>
    <nav>
        <a href="<?= base_url('/');?>" class="active">Dashboard</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= site_url('admin/artikel/add'); ?>">Tambah Artikel</a>

    </nav>
    <section id="wrapper">
        <section id="main">
