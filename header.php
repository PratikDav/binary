<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./header.css">
    <title>Binary Search & It's Complexity</title>
    <style>
        #scaling{
            background: linear-gradient(-45deg, #23a6d5, #38bdf8, #23a6d5); 
            border-radius: 30px; 
            margin-left: 265px;
        }
        @media (max-width:668px){
            #home{
                margin-left: 15px;
            }
            #mainContainer{
                margin: 0;
                padding: 0;
            }
        }
        @media (max-width:600px){
            #home{
                margin-left: 15px;
            }
        }
        @media (max-width:769px){
            #home{
                margin-left: 15px;
            }
        }
        @media(max-width:1025){
            #scaling{
                margin-left: 100px !important;
            }
        }
        @media(max-width:1366){
            #scaling{
                margin-left: 166px ;
            }
        }
    </style>
</head>
<body style="background-color: rgb(15, 23, 42)">
<div id="mainContainer"  class="container">
        <nav id="navContainer" class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a id="binary" style="color: #38bdf8;font-size: 30px" class="navbar-brand" href="./index.php">BINARY SEARCH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <section id="scaling" style="" >
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul style="margin-right: 5.5rem;  font-size: 22px"class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a id="home" style="color: #ffffff" class="nav-link  active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #ffffff" class="nav-link ms-3 active" href="profile.php">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #ffffff" class="nav-link ms-3 active" href="binary.php">Binary Search</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #ffffff" class="nav-link ms-3 active" href="complexity.php">Time Complexity</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </nav>
