<?php

include 'header.php';

?>

<button style="background-color:#38bdf8;text-decoration:none; color:black; border:10px; border-radius: 5px; margin-top:4rem" class="fw-bold pt-2 pb-2 pe-4 ps-4"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">All Slides</button>
<div style ="width: 15rem; height: 36rem; margin-top:11rem" class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby=" offcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Slides For Binary Search</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>There are six slides for Binary Search and rest two for Time Complexity.</p>
  </div>
  <div class="offcanvas-body" style=" margin-left: 80px; margin-right:52px">
    <button onclick="changeSlideOne()" style="background-color:#38bdf8; margin-bottom:10px; color:black; border:10px; border-radius: 5px;" class="fw-bold py-2 px-2">Slide 1</button>
    <button onclick="changeSlideTwo()" style="background-color:#38bdf8; margin-bottom:10px; color:black; border:10px; border-radius: 5px;" class="fw-bold py-2 px-2">Slide 2</button>
    <button onclick="changeSlideThree()" style="background-color:#38bdf8; margin-bottom:10px; color:black; border:10px; border-radius: 5px;" class="fw-bold py-2 px-2">Slide 3</button>
    <button onclick="changeSlideFour()" style="background-color:#38bdf8; margin-bottom:10px; color:black; border:10px; border-radius: 5px;" class="fw-bold py-2 px-2">Slide 4</button>
    <button onclick="changeSlideFive()" style="background-color:#38bdf8; margin-bottom:10px; color:black; border:10px; border-radius: 5px;" class="fw-bold py-2 px-2">Slide 5</button>
    <button onclick="changeSlideSix()" style="background-color:#38bdf8; margin-bottom:10px; color:black; border:10px; border-radius: 5px;" class="fw-bold py-2 px-2">Slide 6</button>
  </div>
</div>


<!-- Slide One CSS -->
<style>
    #headingOne{
    color:#ffffff;
    border: 1px solid #38bdf8;
    margin-right:15.75rem;
    margin-left:18.688rem;
    }

    #contentOne{
        margin-left:76px;
    }
    #contentOneHeading{
        color: #ffffff ;
    }
    #firstSection{
    padding:10px; 
    
    }
    #mainOne{
        height:50.5rem;
    }
    #tableTwo{
    margin-top: 14px;
    margin-bottom:20px;
    margin-left:148px;
    }
    #contentOneParagraph{
    color: #909eb2;
    font-size:20px;
    }

    @media (max-width:668px){
      #mainOne{
        width: 668px;
        overflow-x: hidden !important;
      }
      /* #mainTwo{
        width: 668px;
        overflow-x: hidden !important;
      }
      #mainThree{
        width: 668px;
        overflow-x: hidden !important;
      } */
      #firstSection{
       width: 200px; 
       margin-left:216px;
       margin-right: 0px !important;
      }
      /* #secondSection{
       width: 200px; 
       margin-left:216px;
       margin-right: 0px !important;
      } */
      #contentOne{
        margin-right: 0px !important;
        margin-left:0px;
        margin: 0 !important;
        width: 600px;
      }
      #headingOne{
        margin-right:20px;
        margin-left:20px;
      }
      /* #headingTwo{
        margin-right:20px;
        margin-left:20px;
      } */
      #tableTwo{
        width: 600px;
        margin-left:0px;
      }
      /* #tableThree{
        width: 600px;
        margin-left:0px;
      }
      #tableFive{
        width: 600px;
        margin-left:0px;
      } */
    }
    @media(max-width:600px){
      #tableTwo{
        width: 514.5px;
        margin:0px;

      }
      #firstSection{
       width: 200px; 
       margin-left:0px;
       margin-right: 0px !important;
      }
      #headingOne{
        margin-right:0;
        margin-left:0;
      }
    }
    @media(max-width:769px){
      #contentOne{
        width: 750px;
      }
      #firstSection{
       width: 200px; 
       margin-left:160px;
       margin-right: 0px !important;
      }
      #headingOne{
        margin-right:0;
        margin-left:0;
      }
      #tableTwo{
        width: 700px;
        margin:0px;

      }
    
    }
    @media(max-width:1025px){
      #tableTwo{
        width: 900px;
        margin:0px;

      }
    }
    @media(max-width:1200px){
      #tableTwo{
        width: 900px;
        margin:0px;
      }
    }
    @media(max-width:1366px){
      #tableTwo{
        width: 1100px;
        margin:0px;
      }
    }
</style>


<!-- Slide One Body-->
<main id="mainOne">
    <section id="firstSection" class="text-center" >
        <h1 id="headingOne">Slide 1</h1>
    </section>
        <article id="contentOne">

            <h2 id="contentOneHeading">What is Binary Search?</h2><br>

            <p id="contentOneParagraph">A binary search is a search in which the middle element is calculated to check whether it is smaller or larger than the element which is to be searched. The main advantage of using binary search is that it does not scan each element in the list. Instead of scanning each element, it performs the searching to the half of the list. So, the binary search takes less time to search an element as compared to a linear search.</p>
            <p id="contentOneParagraph">
                Now,<br>
                Let's take an array of a student's result number of his particular subject.<br>
                <br>So,
                The numbers obtained by the student are respectively 72, 70, 81, 78, 75, 82, 87, 85, 83, 90.
                <img id="tableTwo" src="tableTwo.png" alt=""><br>
                Suppose, the student obtained 75 marks in Data Structure.
                We have to find this number from this number's array.
                </p>
                <p id="contentOneParagraph">Here, the array is not sorted. Before finding the Data structure marks form this array, we have to sort this array because binary search only works in sorted array.</p>
        </article>
    
    
</main>

<!-- Slide Two CSS-->
<style>
    #secondSection{
        padding: 10px;
        /* height: 100px; */
    }
    #headingTwo{
        color:#ffffff;
        border: 1px solid #38bdf8;
        margin-right:15.75rem;
        margin-left:18.688rem;
        margin-bottom: 50px;
    }
    #tableFive{
        /* margin-top: 14px; */
        margin-left:155px;
        margin-bottom: 20px;
    }  
    #tableThree{
        margin-top: 14px;
        margin-left:148px;
        /* margin-bottom: 20px; */
    }
    #mainTwo{
        height:55.5rem;
    }
    
</style>

<!-- Slide Two Body-->
<main id="mainTwo">
    <section id="secondSection" class="text-center">
    <h1 id="headingTwo">Slide 2</h1>
    </section>
    <article id="contentOne">
    <h2 id="contentOneHeading" >How Binary Search Work?</h2><br>
    <p id="contentOneParagraph">Now, we are going to sort the array below:</p>
    <img id="tableThree" src="./tableThree.png" alt="">
    <img id="tableFive" src="./tableFive.png" alt=""><br>
    <p id="contentOneParagraph">Now, we have to set two point Left and Right at the lowest and hightest positions respectively.</p>
    <img id="tableThree" src="./tableFour.png" alt="">
    <p id="contentOneParagraph">There are total ten numbers in the array and the value of Left and Right is respectively index[0] and index[9].
    </p>
    </article>
</main>

<!-- Slide Three Body-->
<main id="mainThree">
    <section id="thirdSection" class="text-center">
        <h1 id="headingTwo">Slide 3</h1>
    </section>
    <article id="contentOne">
        <img src="./casePic.png" alt="">
        </p>
        <img id="tableThree" src="./tableFour.png" alt="">
        <p id="contentOneParagraph">
            Here,<br>
                First Index = Left = 0<br>
                Last Index = Right = 9<br>
                Total Index, n = 10 <br>
                mid = int(l + r)/2 = int(0 + 9)/2 = 4
        </p>
        <img id="tableThree"  src="./tableSeven.png" alt=""><br>
    </article>
</main>


 <script>
  document.getElementById("mainOne").style.display="none";
  document.getElementById("mainTwo").style.display="none";
  document.getElementById("mainThree").style.display="none";


  function changeSlideOne() {
    
    document.getElementById("mainOne").style.display="block";
    document.getElementById("mainTwo").style.display="none";
    document.getElementById("mainThree").style.display="none";
  }

  function changeSlideTwo() {
    document.getElementById("mainTwo").style.display="block";
    document.getElementById("mainOne").style.display="none";
    document.getElementById("mainThree").style.display="none";
  }

  function changeSlideThree() {
    document.getElementById("mainThree").style.display="block";
    document.getElementById("mainTwo").style.display="none";
    document.getElementById("mainOne").style.display="none";
  }
</script> 





<?php

include 'footer.php';

?>