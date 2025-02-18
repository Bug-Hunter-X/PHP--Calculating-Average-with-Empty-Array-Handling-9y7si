# PHP Average Calculator with Empty Array Handling

This repository contains a PHP function designed to calculate the average of a numerical array.  The code includes robust handling for the edge case of an empty input array, preventing potential division-by-zero errors.

## Function: `calculateAverage`

The `calculateAverage` function takes a numerical array as input and returns the calculated average as a float. If the input array is empty, it gracefully returns 0.0.

## Usage

The included example demonstrates how to use the `calculateAverage` function.  It showcases scenarios with both non-empty and empty input arrays.

## Improvements

* **Type Hinting:** Uses type hinting (`array $numbers`) for better code readability and maintainability.
* **Empty Array Handling:** Explicitly handles the case of an empty input array to prevent errors. 
* **Return Type Declaration:** Specifies the return type as `float` for enhanced clarity.

This example provides a simple yet effective solution for calculating averages in PHP, highlighting best practices for handling potential errors.