# Sprint 3 — Task 02: Design Patterns

## 📄 Description

This repository contains the exercises for **Sprint 3 — Task 02**.

The objective of this task is to understand and implement some of the most commonly used **Design Patterns** in software development using PHP.

Each exercise demonstrates how a specific design pattern can be applied to solve recurring software architecture and object-oriented programming problems.

The project is organized by levels and patterns, with each exercise containing its own source code and execution entry point.

---

## 🎯 Objectives

* Understand the purpose of Design Patterns
* Learn how to apply common software design solutions
* Improve code organization and scalability
* Practice Object-Oriented Programming in PHP
* Build reusable and maintainable architectures

---

## 🛠 Technologies

* PHP

---

## ⚙️ Requirements

* PHP 8.0 or higher

---

## 🚀 Installation

Clone the repository:

```bash
git clone https://github.com/M3lgone/task-s3-02.git
```

---

## ▶️ How to Run

Each exercise has its own entry point inside the `public/` folder.

Run any exercise using:

```bash
php public/index.php
```

📌 Navigate to the desired exercise folder before running the command.

Example:

```bash
cd level-1/Singleton
php public/index.php
```

---

## 📁 Project Structure

```text
task-s3-02/
├── level-1/
│   ├── Dependency-Injection/
│   │   ├── public/
│   │   │   └── index.php
│   │   └── src/
│   │       ├── Gadget.php
│   │       ├── HomeKeys.php
│   │       ├── Person.php
│   │       ├── Smartphone.php
│   │       └── Wallet.php
│   │
│   └── Singleton/
│       ├── public/
│       │   └── index.php
│       └── src/
│           └── Tigger.php
│
├── level-2/
│   ├── Adapter/
│   │   ├── public/
│   │   │   └── index.php
│   │   └── src/
│   │       ├── Duck.php
│   │       ├── DuckAction.php
│   │       ├── Turkey.php
│   │       └── TurkeyAdapter.php
│   │
│   └── Facade/
│       ├── public/
│       │   └── index.php
│       └── src/
│           ├── DishWasher.php
│           ├── ICleanDish.php
│           ├── IClearDish.php
│           ├── IDryDish.php
│           └── ISoapDish.php
│
├── level-3/
│   ├── Observer/
│   │   ├── public/
│   │   │   └── index.php
│   │   └── src/
│   │       ├── Mentor.php
│   │       ├── Moodle.php
│   │       └── Teacher.php
│   │
│   └── Strategy/
│       ├── public/
│       │   └── index.php
│       └── src/
│           ├── BmwCouponGenerator.php
│           ├── CarCouponGenerator.php
│           ├── Coupon.php
│           └── MercedesCouponGenerator.php
│
├── .gitignore
└── README.md
```

---

## ⭐ Exercises

This task includes multiple exercises grouped by Design Patterns:

⭐ **Level 1**
* Singleton
* Dependency Injection

⭐⭐ **Level 2**
* Adapter
* Facade

⭐⭐⭐ **Level 3**
* Strategy
* Observer

👉 Each exercise demonstrates the implementation of a different design pattern in PHP.

---

## ✅ Progress

### Level 1

* [x] Singleton
* [x] Dependency Injection

### Level 2

* [x] Adapter
* [x] Facade

### Level 3

* [x] Strategy
* [x] Observer

---

## 🧠 Notes

* Each exercise is independent and can be executed separately.
* The focus of this task is on software architecture and reusable design solutions.
* Design Patterns help improve scalability, maintainability, and code readability.
* The implementations are intentionally simple to better understand the core concepts behind each pattern.
* All exercises follow Object-Oriented Programming principles using PHP.

---