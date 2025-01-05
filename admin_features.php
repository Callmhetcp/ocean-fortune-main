<?php

ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 0);
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_lname = $_SESSION['user_lastname'] ;
$email = $_SESSION['user_email'] ;


if (!isset($_SESSION['notifications'])) {
  $_SESSION['notifications'] = [];
}

function addLoginNotification($userName) {
  $message = "Login successful for user: " . htmlspecialchars($userName);
  $_SESSION['notifications'][] = $message;
}

addLoginNotification($user_lname);  

// Display notifications
?>



<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <!-- ============TITLE============= -->
      <title>Ocean Fortune</title>
  
      <!-- ============HEAD-ICON-LOGO============= -->
      <link rel="icon" type="image/png" href="assets/images/logo.png">
  
      <!-- ============CSS-LINKS============= -->
      <link rel="stylesheet" href="assets/css/features.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/mediaquery.css">
      <link rel="stylesheet" href="assets/css/main-mediaquery.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  
  
      <!-- ============FONT-AWESOME-LINKS============= -->
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  

  </head>
    
    <style>
      html{
        animation: none;
      }

    </style>
<body>

      <header class="dashboard_header">
          <div class="wrapper">
            <div class="logo">
              <div class="image_wrapper">
                  <img src="assets/images/logo.png" width="42" height="42" alt="">
              </div>
            </div>
            
            <div class="icons">
              <ul>
                <h4 style="color: white;"><?php echo htmlspecialchars($user_lname); ?>
                  <span class="login-status"></span>
                </h4>
                  <li class=""><a href="#"><i class="material-icons notification-icon">notifications_none</i></a>
                      <div class="notification_box">
                        <div class="wrapper">
                          <header>
                              <span>Notifications</span>
                              <a href="#">Clear All</a>
                          </header>
                          <ul>
                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>487887</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="view_all"><a href="#">View All</a></div>
                        </div>
                      </div>
                  </li>

                  <li><a><i class="material-icons account-icon">account_circle</i></a>
                      <div class="profile_box">
                          <ul>
                              <li>
                                  <a href="admin_profile.php">
                                      <i class="material-icons">person_outline</i>
                                      <span>Profile </span>
                                  </a>
                              </li>
                              <li>
                                  <a href="admin_wallet_page.php">
                                      <i class="material-icons">account_balance_wallet</i>
                                      <span>Wallet</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="logout.php">
                                      <i class="material-icons">logout</i>
                                      <span>Logout</span>
                                  </a>
                              </li>
                          </ul>
                      </div>

                      
                  </li>

                
              </ul>
            </div>
          </div>


        <!-- ============ CRYPTO STICKER ============= //--AT THE TOP, BELOW THE NAV BAR--//-->
        <div class="crypto-ticker">
          <div style="height:62px; background-color: #1e293b; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
              <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                  <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                  <script>
                      document.addEventListener('contextmenu', (event) => event.preventDefault());
                          document.onkeydown = function(e) {
                              // Disable F12, Ctrl+Shift+I (Inspector), Ctrl+Shift+J (Console), Ctrl+U (View Source)
                              if (e.keyCode == 123 || // F12
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) || // Ctrl+Shift+I
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) || // Ctrl+Shift+J
                                  (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) { // Ctrl+U
                                  return false; // Prevent the event
                              }
                          };
                  </script>
              </div>
              <div style="color: #1e293b; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                  <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px"></a>
              </div>
          </div>
        </div>
      </header>
            

        <?php
        
             include 'dashboard_logic.php'             
        
        ?>

    
        
            
    <aside class="sidebar">
        <div class="wrapper">


            <div class="sidebar_menu">
                <ul>
                    <li>
                        <a href="admin_dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_swap.php">
                            <i class="material-icons">swap_calls</i>
                            <span>Swap</span>
                        </a>
                    </li>

                    <li>
                        <a href="users.php">
                            <i class="fa fa-user-o"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="admin_history.php">
                            <i class="material-icons">history</i>
                            <span>History</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_features.php">
                            <i class="material-icons">widgets</i>
                            <span>Features</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_market.php">
                            <i class="material-icons">store</i>
                            <span>Market</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar_widgets">
            <div class="wrapper">
                <div class="image">
                <img src="assets/images/crypto-join.png" alt="">
                </div>
                <div class="text">
                <h3>Invest Now!</h3>
                <a href="">
                    Buy and Sell Coins
                </a>
                <br><br>
                </div>
            </div>
            </div>
        </div>
    </aside>
      
      <main class="main_content">

        <div class="investment-header">
            <h1 class="investment-title">Investment</h1>
            <div class="dropdown">
                <div class="dropdown-item" id="createInvestment">Create Investment</div>
                <div class="dropdown-item">Generate Plan</div>
            </div>
        </div>

        <div class="cards-container" id="cardsContainer">
            <!-- <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Crypto Currency</h2>
                </div>
                <button class="select-button">Select Option</button>
                <div class="selection-options crypto-options">
                    <h6>Crypto Currency Investment Options</h6>
                    <a>Bitcoin</a>
                    <a>Ethereum</a>
                    <a>Binance Coin</a>
                    <a>Litecoin</a>
                    <a>Dogecoin</a>
                    <a>XRP</a>
                    <a>Shiba Inu</a>
                    <a>USDT</a>
                </div>
                <div class="card-dropdown">
                    <div class="card-dropdown-item edit">Edit</div>
                    <div class="card-dropdown-item delete">Delete</div>
                    <div class="card-dropdown-item add-option">Add Option</div>
                </div>
            </div> -->

            <!-- <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Forex</h2>
                </div>
                <button class="select-button">Select Option</button>
                <div class="selection-options forex-options">
                    <h6>Forex Investment Options</h6>
                    <a>USD/CAD</a>
                    <a>EUR/USD</a>
                    <a>USD/CHF</a>
                    <a>GBP/USD</a>
                    <a>NZD/USD</a>
                    <a>EUR/GBP</a>
                    <a>EUR/CAD</a>
                    <a>EUR/AUD</a>
                    <a>GBP/CHF</a>
                    <a>EUR/JPY</a>
                </div>
                <div class="card-dropdown">
                    <div class="card-dropdown-item edit">Edit</div>
                    <div class="card-dropdown-item delete">Delete</div>
                    <div class="card-dropdown-item add-option">Add Option</div>
                </div>
            </div> -->
<!-- 
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Stocks</h2>
                </div>
                <button class="select-button">Select Option</button>
                <div class="selection-options stocks-options">
                    <h6>Stocks Investment Options</h6>
                    <a>Advanced Micro Devices Inc</a>
                    <a>GameStop Corporation</a>
                    <a>Cassava Sciences Inc</a>
                    <a>Alpha Metallurgical Resources Inc</a>
                    <a>Danaos Corp</a>
                    <a>Cleveland-Cliffs Inc</a>
                    <a>Movado Group Inc</a>
                    <a>Aerocentury Corp</a>
                    <a>NVIDIA Corporation</a>
                    <a>Microsoft Corporation</a>
                </div> -->
                <div class="card-dropdown">
                    <div class="card-dropdown-item edit">Edit</div>
                    <div class="card-dropdown-item delete">Delete</div>
                    <div class="card-dropdown-item add-option">Add Option</div>
                </div>
            </div>
        </div>

        <!-- Create Investment Modal -->
        <div class="modal" id="createModal">
            <div class="modal-content">
                <h2 class="modal-title">Create New Investment</h2>
                <input type="text" class="modal-input" placeholder="Enter investment name" id="investmentName">
                <div class="modal-buttons">
                    <button class="modal-button cancel" id="cancelCreateButton">Cancel</button>
                    <button class="modal-button confirm" id="confirmCreateButton">Create New</button>
                </div>
            </div>
        </div>

        <!-- Edit Investment Modal -->
        <div class="modal" id="editModal">
            <div class="modal-content">
                <h2 class="modal-title">Edit Investment</h2>
                <input type="text" class="modal-input" placeholder="Enter new investment name" id="editInvestmentName">
                <div class="modal-buttons">
                    <button class="modal-button cancel" id="cancelEditButton">Cancel</button>
                    <button class="modal-button confirm" id="confirmEditButton">Save</button>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal" id="deleteModal">
            <div class="modal-content">
                <h2 class="modal-title">Confirm Deletion</h2>
                <p>Are you sure you want to delete this investment?</p>
                <div class="modal-buttons">
                    <button class="modal-button cancel" id="cancelDeleteButton">Cancel</button>
                    <button class="modal-button confirm" id="confirmDeleteButton">Confirm</button>
                </div>
            </div>
        </div>
        <!-- Selection Modal (Popup) -->
        <div id="selectModal" class="modal">
            <div class="modal-content">
                <span id="closeSelectModal" class="close-btn">&times;</span>
                <h3>Investment Options</h3>
                <ul id="selectModalOptions">
                    <!-- Options will be dynamically added here -->
                </ul>

                <div class="modal-buttons">

                    <button id="confirmSelectButton"class="modal-button confirm">Select</button>
                    <button id="cancelSelectButton" class="modal-button cancel">Cancel</button>
                </div>
            </div>
        </div>






        <!-- PLANS -->
        <header class="plans-header">
            <div class="header-content">
                <div class="header-left">
                    <h1>XRP</h1>
                    <h4>Stake from $0.00 (0.00 XRP) wallet</h4>
                </div>
                <button class="btn-back">Back</button>
            </div>
        </header>
         


        <div class="container">
        <div class="plans-container">
            <div class="plans-card">
                <div class="plans-card-header">
                    <h5>XRP Trial Mining</h5>
                </div>
                <div class="card-body">
                    <div class="card-body-content">
                        <div class="price-range">
                            <h2>$1,000.00</h2>
                            <i class="fas fa-long-arrow-alt-down"></i>
                            <h2>$2,999.00</h2>
                        </div>
                        <h6>Includes:</h6>
                        <ul>
                            <li>0.50% ROI</li>
                            <li>Contract: 3 Day(s)</li>
                            <li>Commission: 5.00%</li>
                            <li>Benefit: Monitoring profits daily</li>
                        </ul>
                    </div>
                    <div class="button-wrapper">
                        <button class="btn-invest">Invest Now</button>
                    </div>
                </div>
            </div>

            <div class="plans-card">
                <div class="plans-card-header">
                    <h5>XRP Bronze Mining</h5>
                </div>
                <div class="card-body">
                    <div class="card-body-content">
                        <div class="price-range">
                            <h2>$3,000.00</h2>
                            <i class="fas fa-long-arrow-alt-down"></i>
                            <h2>$4,999.00</h2>
                        </div>
                        <h6>Includes:</h6>
                        <ul>
                            <li>1.50% ROI</li>
                            <li>Contract: 7 Day(s)</li>
                            <li>Commission: 5.00%</li>
                            <li>Benefit: Monitoring profits daily</li>
                        </ul>
                    </div>
                    <div class="button-wrapper">
                        <button class="btn-invest">Invest Now</button>
                    </div>
                </div>
            </div>

            <div class="plans-card">
                <div class="plans-card-header">
                    <h5>XRP Silver Mining</h5>
                </div>
                <div class="card-body">
                    <div class="card-body-content">
                        <div class="price-range">
                            <h2>$5,000.00</h2>
                            <i class="fas fa-long-arrow-alt-down"></i>
                            <h2>$9,999.00</h2>
                        </div>
                        <h6>Includes:</h6>
                        <ul>
                            <li>2.00% ROI</li>
                            <li>Contract: 7 Day(s)</li>
                            <li>Commission: 5.00%</li>
                            <li>Benefit: Monitoring profits daily</li>
                        </ul>
                    </div>
                    <div class="button-wrapper">
                        <button class="btn-invest">Invest Now</button>
                    </div>
                </div>
            </div>

            <div class="plans-card">
                <div class="plans-card-header">
                    <h5>XRP Gold Mining</h5>
                </div>
                <div class="card-body">
                    <div class="card-body-content">
                        <div class="price-range">
                            <h2>$10,000.00</h2>
                            <i class="fas fa-long-arrow-alt-down"></i>
                            <h2>$500,000.00</h2>
                        </div>
                        <h6>Includes:</h6>
                        <ul>
                            <li>3.50% ROI</li>
                            <li>Contract: 14 Day(s)</li>
                            <li>Commission: 5.00%</li>
                            <li>Benefit: Monitor Profits Daily</li>
                        </ul>
                    </div>
                    <div class="button-wrapper">
                        <button class="btn-invest">Invest Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


      </main>
      <script defer>
    const investmentTitle = document.querySelector('.investment-title');
    const dropdown = document.querySelector('.dropdown');
    const createInvestment = document.getElementById('createInvestment');
    const createModal = document.getElementById('createModal');
    const editModal = document.getElementById('editModal');
    const deleteModal = document.getElementById('deleteModal');
    const cancelCreateButton = document.getElementById('cancelCreateButton');
    const confirmCreateButton = document.getElementById('confirmCreateButton');
    const cancelEditButton = document.getElementById('cancelEditButton');
    const confirmEditButton = document.getElementById('confirmEditButton');
    const cancelDeleteButton = document.getElementById('cancelDeleteButton');
    const confirmDeleteButton = document.getElementById('confirmDeleteButton');
    const investmentName = document.getElementById('investmentName');
    const editInvestmentName = document.getElementById('editInvestmentName');
    const cardsContainer = document.querySelector('.cards-container');

    let currentCard = null;

    // Toggle dropdown when investment title is clicked
    investmentTitle.addEventListener('click', () => {
        dropdown.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!e.target.closest('.investment-header')) {
            dropdown.classList.remove('active');
        }
    });

    // Show create modal when 'Create Investment' is clicked
    createInvestment.addEventListener('click', () => {
        createModal.classList.add('active');
        dropdown.classList.remove('active');
        investmentName.value = ''; // Clear input
    });

    cancelCreateButton.addEventListener('click', () => {
        createModal.classList.remove('active');
    });

    confirmCreateButton.addEventListener('click', () => {
        const name = investmentName.value.trim();
        if (name) {
            // Send a request to create a new investment table in the database
            fetch('create_investment.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ action: 'create_investment', name: name }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Investment table created successfully!');
                    const newCard = createCard(name);
                    cardsContainer.appendChild(newCard);
                    createModal.classList.remove('active');
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    });

    // Fetch and display investments from the database
    function fetchInvestments() {
    fetch('fetch_investments.php')
        .then(response => response.json())
        .then(data => {
            if (data.success && data.investments.length > 0) {
                data.investments.forEach(investment => {
                    const newCard = createCard(investment.investment_name, investment.card_id);
                    cardsContainer.appendChild(newCard);
                });
            } else {
                console.log('No investments found.');
            }
        })
        .catch(error => {
            console.error('Error fetching investments:', error);
        });
}


    // Create a card for each investment
    function createCard(name, id) {
    const newCard = document.createElement('div');
    newCard.className = 'card';
    newCard.setAttribute('data-id', id); // Set the data-id attribute

    newCard.innerHTML = `
        <div class="card-header">
            <h2 class="card-title">${name}</h2>
        </div>
        <button class="select-button">Select Option</button>
        <div class="selection-options">
            <h6>${name} Investment Options</h6>
            <!-- Options will be dynamically added here -->
                    <a>Bitcoin</a>
                    <a>Ethereum</a>
                    <a>Binance Coin</a>
                    <a>Litecoin</a>
                    <a>Dogecoin</a>
                    <a>XRP</a>
                    <a>Shiba Inu</a>
                    <a>USDT</a>
        </div>
        <div class="card-dropdown">
            <div class="card-dropdown-item edit">Edit</div>
            <div class="card-dropdown-item delete">Delete</div>
            <div class="card-dropdown-item add-option">Add Option</div>
        </div>
    `;

    addCardListeners(newCard); // Attach listeners
    return newCard;
}

    // Add event listeners to card elements for dropdowns, editing, and deleting
    function addCardListeners(card) {
        const cardHeader = card.querySelector('.card-header');
        const cardDropdown = card.querySelector('.card-dropdown');
        const editButton = card.querySelector('.edit');
        const deleteButton = card.querySelector('.delete');
        const selectButton = card.querySelector('.select-button');
        const selectionOptions = card.querySelector('.selection-options');

        cardHeader.addEventListener('click', () => {
            cardDropdown.classList.toggle('active');
        });

        editButton.addEventListener('click', () => {
            currentCard = card;
            const currentName = card.querySelector('.card-title').textContent;
            const investmentId = currentCard.dataset.id; // Get the ID from the data-id attribute
            editInvestmentName.value = currentName;

            editModal.classList.add('active');
            cardDropdown.classList.remove('active');

            // Listen for confirm button click to update the database
            confirmEditButton.addEventListener('click', function confirmEditHandler() {
                const newName = editInvestmentName.value.trim();
                if (newName && investmentId) {
                    // Send a request to update the investment name in the database
                    fetch('edit_investment.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ id: investmentId, new_name: newName }),
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Investment updated successfully!');
                                currentCard.querySelector('.card-title').textContent = newName; // Update UI
                                editModal.classList.remove('active');
                            } else {
                                alert('Error: ' + data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred. Please try again.');
                        })
                        .finally(() => {
                            confirmEditButton.removeEventListener('click', confirmEditHandler); // Clean up event listener
                        });
                } else {
                    alert('Invalid input or investment ID.');
                }
            });
        });


        deleteButton.addEventListener('click', () => {
            currentCard = card;
            const investmentId = card.getAttribute('data-id'); // Get the data-id from the card
            deleteModal.classList.add('active');
            cardDropdown.classList.remove('active');
            
            // Confirm deletion when the user clicks "Confirm Delete"
            confirmDeleteButton.addEventListener('click', () => {
                // Send the delete request to the server
                fetch('delete_investment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ id: investmentId }), // Pass the investment ID to be deleted
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // If successful, remove the card from the DOM
                        currentCard.remove();
                        deleteModal.classList.remove('active');
                        alert('Investment deleted successfully!');
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error deleting investment:', error);
                    alert('An error occurred. Please try again.');
                });
            });

    // Close the delete modal if the user clicks "Cancel"
    cancelDeleteButton.addEventListener('click', () => {
        deleteModal.classList.remove('active');
    });
});


        selectButton.addEventListener('click', () => {
            selectionOptions.classList.toggle('active');
        });
        
    }

    // Listen for confirm and cancel actions for Edit and Delete modals
    confirmEditButton.addEventListener('click', () => {
        const newName = editInvestmentName.value.trim();
        if (newName && currentCard) {
            currentCard.querySelector('.card-title').textContent = newName;
            editModal.classList.remove('active');
        }
    });

    cancelEditButton.addEventListener('click', () => {
        editModal.classList.remove('active');
    });

    confirmDeleteButton.addEventListener('click', () => {
        if (currentCard) {
            currentCard.remove();
            deleteModal.classList.remove('active');
        }
    });

    cancelDeleteButton.addEventListener('click', () => {
        deleteModal.classList.remove('active');
    });

    // Close modals when clicking outside
    [createModal, editModal, deleteModal].forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });

    // Listen for enter key on investment name inputs
    investmentName.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            confirmCreateButton.click();
        }
    });

    editInvestmentName.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            confirmEditButton.click();
        }
    });

    // Close dropdowns if clicked outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.card-header') && !e.target.closest('.select-button')) {
            document.querySelectorAll('.card-dropdown, .selection-options').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    });

    // Initialize by fetching investments on page load
    fetchInvestments();
    
</script>

      

      
      
       <footer class="dashboard_footer">
        <div class="wrapper">
          <span>© 2024 <a href="index.php">Creative Fortune</a>All Right Reserved</span>
          <span><a href="#">Purchase Now</a></span>
        </div>
       </footer>

      <section class="bottom_nav">
        <div class="wrapper">
            <ul>
                <li>
                    <a href="admin_dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Home</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="admin_swap.php">
                        <i class="material-icons">swap_calls</i>
                        <span>Swap</span>
                    </a>
                </li>
            </ul>
            
            <ul>
                <li>
                    <a href="users.php">
                        <i class="fa fa-user-o"></i>
                        <span>Users</span>
                    </a>
                </li>
            </ul>
            

            <ul>
                <li>
                    <a href="admin_history.php">
                        <i class="material-icons">history</i>
                        <span>History</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="features.php">
                        <i class="material-icons">widgets</i>
                        <span>Features</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="market.php">
                        <i class="material-icons">store</i>
                        <span>Market</span>
                    </a>
                </li>
            </ul>
        </div>
      </section>



    <!-- ============JAVASCRIPT-LINKS============= -->
    <script src="assets/user/javascript/popup.js"></script>
    <script src="assets/user/javascript/function.js"></script>


</body>
</html>

