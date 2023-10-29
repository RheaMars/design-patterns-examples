## The Factory Method Pattern

### Goal of usage

Provide an interface for creating objects but allow subclasses to alter the type of objects that will be created.
The pattern provides a way to delegate the responsibility of instantiating objects to subclasses.

### When to use?

Used in situations where you need to create objects, but the exact class of objects to be created is not known until
runtime or needs to be determined by subclasses. The pattern can also be handy if you want to provide users of your
library or framework with a way to extend its internal components.

### How to implement?

- Set up a common product interface which declares methods that make sense in every concrete product.
- Make all concrete products follow this interface.
- Set up an abstract creator class with the abstract factory method. The return type of the abstract factory method
  should match the common product interface.
- Set up the concrete creator classes extending the abstract creator class.
- In the client code work with the abstract creator class instead of its concrete implementations.

### Further notes

The Factory Method pattern is widely used in PHP code. It can be very useful when you need to provide a high level of
flexibility for your code.
Many designs start by using Factory Method, which is less complicated and more customizable via subclasses, and evolve
toward Abstract Factory, Prototype, or Builder which are more flexible, but more complicated.
