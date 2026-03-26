
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PandaTracker Dashboard</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      background: radial-gradient(circle, #0b2a46, #041421);
      color: white;
      font-family: sans-serif;
    }

    /* glass cards */

    .glass {
      background: rgba(255, 255, 255, 0.04);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      transition: .3s;
    }

    .glass:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    /* button */

    .glow {
      background: linear-gradient(90deg, #22c55e, #4ade80);
      transition: .3s;
    }

    .glow:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 20px #22c55e;
    }
  </style>

</head>


<body>


  <!-- HEADER FULL WIDTH -->

  <div class="flex justify-between items-center px-8 py-5 border-b border-white/10">

    <div class="flex items-center gap-2 text-xl font-semibold">

      <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png"
        class="w-6">

      PandaTracker

    </div>

    <div class="flex items-center gap-4">

      <p class="text-sm text-gray-400">
        Welcome back!
        <span class="text-white font-semibold">govind1605</span>
      </p>

      <a href="login.html">

        <button class="px-4 py-2 bg-red-500/20 border border-red-400 rounded-lg text-red-300 hover:bg-red-500/30 transition">

          Sign Out

        </button>

      </a>

    </div>

  </div>



  <!-- DASHBOARD CONTENT CONTAINER -->

  <div class="max-w-6xl mx-auto px-4 py-8">



    <!-- STATS CARDS -->

    <div class="grid md:grid-cols-3 gap-6 mb-6">


      <!-- income -->

      <div class="glass p-6 rounded-xl">

        <p class="text-gray-400 text-sm mb-1">TOTAL INCOME</p>

        <h2 class="text-green-400 text-2xl font-bold">₹0.00</h2>

      </div>


      <!-- expenses -->

      <div class="glass p-6 rounded-xl">

        <p class="text-gray-400 text-sm mb-1">TOTAL EXPENSES</p>

        <h2 class="text-red-400 text-2xl font-bold">₹50.00</h2>

      </div>


      <!-- balance -->

      <div class="glass p-6 rounded-xl">

        <p class="text-gray-400 text-sm mb-1">BALANCE</p>

        <h2 class="text-blue-400 text-2xl font-bold">₹-50.00</h2>

      </div>


    </div>



    <!-- MAIN GRID -->

    <div class="grid md:grid-cols-2 gap-6">


      <!-- ADD TRANSACTION -->

      <div class="glass p-6 rounded-xl">

        <h3 class="mb-5 font-semibold text-lg">Add Transaction</h3>


        <input placeholder="Description"
          class="w-full p-3 mb-3 rounded-lg bg-[#13283b] outline-none">


        <div class="grid grid-cols-2 gap-3">

          <input placeholder="Amount ₹"
            class="p-3 rounded-lg bg-[#13283b] outline-none">


          <select class="p-3 rounded-lg bg-[#13283b] outline-none">

            <option>Expense</option>
            <option>Income</option>

          </select>

        </div>


        <div class="grid grid-cols-2 gap-3 mt-3">

          <select class="p-3 rounded-lg bg-[#13283b]">

            <option>Food & Dining</option>
            <option>Shopping</option>
            <option>Transport</option>
            <option>Entertainment</option>

          </select>


          <input type="date"
            class="p-3 rounded-lg bg-[#13283b]">

        </div>


        <button class="glow w-full p-3 rounded-lg mt-5 font-semibold">

          Add Transaction +

        </button>

      </div>



      <!-- SPENDING CATEGORY -->

      <div class="glass p-6 rounded-xl">

        <h3 class="mb-5 font-semibold text-lg">Spending by Category</h3>


        <div class="flex justify-between mb-2 text-sm">

          <span>🍔 Food & Dining</span>
          <span>₹50.00 (100%)</span>

        </div>


        <div class="w-full h-2 bg-gray-700 rounded mb-4">

          <div class="bg-yellow-400 h-2 w-full rounded"></div>

        </div>


      </div>

    </div>



    <!-- TRANSACTION HISTORY -->

    <div class="glass p-6 rounded-xl mt-6">

      <h3 class="mb-5 font-semibold text-lg">Transaction History</h3>


      <div class="flex justify-between items-center bg-[#13283b] p-4 rounded-lg">

        <div class="flex items-center gap-3">

          <div class="bg-yellow-400/20 p-2 rounded-lg">
            🍔
          </div>

          <div>

            <p class="font-semibold">food</p>
            <p class="text-xs text-gray-400">
              Food & Dining • 9 Mar 2026
            </p>

          </div>

        </div>


        <div class="flex items-center gap-4">

          <span class="text-red-400 font-semibold">

            -₹50.00

          </span>

          <button class="text-gray-400 hover:text-red-400 transition">

            🗑

          </button>

        </div>

      </div>

    </div>


  </div>


</body>

</html>