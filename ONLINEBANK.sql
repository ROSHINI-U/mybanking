CREATE DATABASE OnlineBankdb;


Use OnlineBankDB;

CREATE TABLE accountdetails (
    id INT PRIMARY KEY IDENTITY(1,1),
    CustomerName VARCHAR(255),
    AccountNumber VARCHAR(20),
    Address VARCHAR(255),
    Phonenumber VARCHAR(15),
    Amount DECIMAL(10, 2)
);

CREATE TABLE staff (
    id INT PRIMARY KEY  IDENTITY(1,1),
    StaffName VARCHAR(255),
    Password VARCHAR(255),
    Emailid VARCHAR(255),
    Designation VARCHAR(255)
);

CREATE TABLE transction (
    id INT PRIMARY KEY IDENTITY(1,1),
    AccountNumber VARCHAR(20),
    TransactionDate DATE,
    Credit DECIMAL(10, 2)
);

