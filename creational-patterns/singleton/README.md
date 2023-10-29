## The Singleton Pattern

### Goal of usage

Ensure that a class has only one instance, while providing a global access point to this instance.

### When to use?

When a class in your program should have just a single instance available to all clients, e.g. database access, file,
logger or shared runtime configuration storage.

### How to implement?

- Make the default constructor private (or protected if you want to allow subclasses of the Singleton).
- Create a static creation method, e.g. `getInstance()` that acts as a constructor. Under the hood, this method calls
  the private constructor to create an object and saves it in a static field. All following calls to this method return
  the cached object.

### Further notes

A lot of people consider the Singleton pattern to be an antipattern.

- Singleton creates a global state, which can make debugging and testing more challenging.
- Violation of the Single Responsibility Principle: The Singleton is responsible for both creating the instance and
  providing access.
- Violation of the Open-Closed Principle: The rigid implementation of a Singleton makes changing the class difficult.
- The Singleton pattern is often misused and used in cases where it is not necessary, leading to unnecessary complexity
  in the code.

Consider to use Dependency Injection and Inversion of Control instead to improve the management of instances and
dependencies in your application. 
