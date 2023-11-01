## The Adapter Pattern

### Goal of usage

Allow objects with incompatible interfaces to collaborate.

### When to use?

When you want to use a legacy class, a 3rd-party class or any other class with a weird interface, but its interface
isn’t compatible with the rest of your code.

### How to implement?

- Create an adapter class and make it follow the target interface.
- Add a field to the adapter class to store a reference to the adaptee object.
- Implement all methods of the target interface in the adapter class.
- Clients should use the adapter via the target interface.

### Further notes

The Adapter pattern is pretty common in PHP code. It’s very often used in systems based on some legacy code. In such
cases, Adapters make legacy code work with modern classes.