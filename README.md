# 📱 Phone Number Validator

A web application to validate phone numbers, check carrier details, and verify if the number is active and connected to a network. This tool supports single-number validation as well as bulk number validation via text file uploads.  

---

## 🚀 Features

- **Single Number Validation**: Validate one number at a time through the input field.
- **Bulk Validation**: Upload a `.txt` file with multiple phone numbers and validate all.
- **Carrier Details**: Displays the carrier/provider name for each validated number.
- **Validation History**: View previously validated numbers with pagination.
- **Download Valid Numbers**: Option to download all valid numbers as a `.txt` file.

---

## 🛠️ Technologies Used

- **Frontend**: HTML5, Tailwind CSS, JavaScript
- **Backend**: PHP
- **Validation API**: [Abstract API - Phone Validation](https://www.abstractapi.com/phone-validation-api)

---

# 💻 Setup Instructions

## Prerequisites

- A web server (e.g., Apache, Nginx, or XAMPP)

- PHP 7.4+ installed on your system

- Composer (optional, for managing dependencies)


## Installation

- 1. **Clone the repository**:
```
git clone https://github.com/yourusername/phone-validator.git
cd phone-validator
```

- 2. **Install Dependencies (if applicable)**:
```
composer install
```

- 3. **Setup API Key**:

- Obtain a free API key from Abstract API.

- Replace YOUR_FREE_API_KEY in validate.php and validate_bulk.php with your API key.



- 4. **Set Up File Permissions**: Ensure the uploads/ directory is writable:
```
chmod -R 775 uploads/
```

- 5. **Run the Project**: Place the project folder in your web server’s root directory and access it via http://localhost/phone-validator.



## 🎨 User Interface

**Single Number Validation**

- Enter a phone number and click "Validate."

- Displays:

* Number validity (valid/invalid).

* Carrier details.



**Bulk Validation**

- Upload a .txt file with one phone number per line.

- Displays validation results for all numbers, including carrier details.


**Validation History**

- View previously validated numbers in a paginated list.


## 📂 Example File Format for Bulk Validation

Upload a .txt file with one phone number per line:
```
+15555555555
+441234567890
+919876543210
```

---

## 🛠️ Contributions

Contributions are welcome! Please fork the repository and submit a pull request with your changes.


---

## 🌟 Acknowledgments

- Abstract API for their free phone validation service.

- Tailwind CSS for a clean and responsive UI.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Code Author

**Author**: [🜲 PaPaGuy Codes](https://github.com/papaguycodes)

