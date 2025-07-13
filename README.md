# The PHP Vault

An interactive virtual escape room built using only PHP, HTML, and CSS. No JavaScript was used, in compliance with course requirements.

## 🎯 Project Goal

Build a riddle-based, level-progressing escape room where players solve puzzles. Player progress is tracked using PHP sessions.

## 🚫 Constraints

- No JavaScript allowed
- No e-commerce functionality
- Must use sessions for user progress
- CSS for all styling and transitions

## 💡 How It Works

- `index.php` starts the game and collects the player's name.
- Players are shown a riddle. If they answer correctly, they proceed to the next puzzle.
- PHP tracks their level using sessions.
- CSS provides animations for doors and transitions.

## 🛠️ Local Setup Instructions

To run this project locally:

1. Download and install [XAMPP](https://www.apachefriends.org/)
2. Move the project folder into the `htdocs` directory (typically `C:/xampp/htdocs`)
3. Start the **Apache** module in XAMPP
4. In your browser, go to: `http://localhost/php-vault/index.php`
5. Play the game and test the features

## 📂 File Structure

