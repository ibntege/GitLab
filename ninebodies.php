<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nine bodies in a Mexican Border</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gradient-to-b from-[#ffff7a] to-green-800 via-[#ee8544] m-5 p-5">
    <header class="text-[72px] text-white mx-auto text-center">10 Passports but 9 Bodies</header>
    <header class="text-[36px] text-white mx-auto text-center mb-5">The 10 people on the Plane are:</header>
    <div class="grid grid-cols-2 md:grid-cols-5 mx-auto">
    <div class="p-5 text-center max-auto text-white relative" data-index="1"><img src="1.webp" class="w-[300px] h-[300px]" alt="flight attendent"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>1-Flight Attendent </span> </div>
    <div class="p-5 text-center max-auto text-white relative" data-index="2"><img src="2.webp" class="w-[300px] h-[300px]" alt="pilot"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>2-Pilot</span></div>
    <div class="p-5 text-center max-auto text-white relative" data-index="3"><img src="3.PNG" class="w-[300px] h-[300px]" alt="Doctor"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>3-Doctor</span></div>
    <div class="p-5 text-center max-auto text-white relative" data-index="4"><img src="4.PNG" class="w-[300px] h-[300px]" alt="Insurance Salesman"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>4-Insurance Salesman</span></div>
    <div class="p-5 text-center max-auto text-white relative" data-index="5"><img src="5.jpeg" class="w-[300px] h-[300px]" alt="MAGA wife"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>5-MAGA Wife</span></div>
    <div class="p-5 text-center max-auto text-white relative" data-index="6"><img src="6.jpeg" class="w-[300px] h-[300px]" alt="MAGA husband"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>6-MAGA Husband</span></div>
    <div class="p-5 text-center max-auto text-white relative" data-index="7"><img src="7.jpeg" class="w-[300px] h-[300px]" alt="photographer"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>7-Photographer</span></div>
    <div class="p-5 text-center max-auto text-white relative" data-index="8"><img src="8.PNG" class="w-[300px] h-[300px]" alt="Tech kid wife"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span></span>8-Tech Kid Wife</div>
    <div class="p-5 text-center max-auto text-white relative" data-index="9"><img src="9.jpeg" class="w-[300px] h-[300px]" alt="Tech kid husband"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>9-Tech Kid Husband</span></div>
    <div class="p-5 text-center max-auto text-white relative" data-index="10"><img src="10.jpeg" class="w-[300px] h-[300px]" alt="Mexican Wrestler"><span class="absolute top-0 left-0 w-full h-full text-center text-red-500 text-[200px] font-bold hidden" onclick="removeX(this)">X</span><span>10-Mexican Wrestler</span></div>

    </div>
    <?php
       date_default_timezone_set("America/New_York");
       echo "Ibrahim Ntege". "<br>";
       echo "PHP version: ".phpversion(). "<br>";
       echo "Today's date: ".date("m-d-Y") . "<br>";
       echo "Curent time: ".date("H:i:s") . "<br>";
       
    ?>


    <button class="mt-5 px-6 py-2 bg-red-500 text-black text-xl font-semibold hover:bg-red-700 transition-all mx-auto block"
    onclick="resetAllX()">
    Reset
   </button>
    
   <script>
    // Function to show the X on the image when clicked and save state
    document.querySelectorAll("img").forEach((img) => {
    img.addEventListener("click", function () {
    const closeX = this.nextElementSibling; // The <span> with the "X"
    closeX.classList.remove("hidden"); // Show the X by removing 'hidden' class
    const index = this.parentElement.getAttribute("data-index");
    localStorage.setItem(`marked-${index}`, true); // Save state
    });
    });
    // Function to remove a specific X when clicked and update state
    function removeX(span) {
    span.classList.add("hidden"); // Hide the X by adding 'hidden' class
    const index = span.parentElement.getAttribute("data-index");
    localStorage.removeItem(`marked-${index}`); // Update state
    }
    // Function to reset (remove) all X's and clear state
    function resetAllX() {
    document.querySelectorAll("span").forEach((span) => {
    if (span.classList.contains("text-red-500")) {
    // Ensure we're only resetting X spans
    span.classList.add("hidden"); // Hide all the X's by adding 'hidden' class
    }
    });
    localStorage.clear(); // Clear all stored states
    }
    // Load saved state from localStorage on page load
    document.addEventListener("DOMContentLoaded", () => {
    for (let i = 1; i <= 10; i++) {
    if (localStorage.getItem(`marked-${i}`) === "true") {
    const span = document.querySelector(`[data-index="${i}"] > span`);
    if (span) {
    span.classList.remove("hidden");
    }
    }
    }
    });
    </script>
</body>
</html>