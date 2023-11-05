## The Iterator Pattern

### Goal of usage

Provide a way to access the elements of a collection sequentially without exposing the underlying structure (list,
stack, tree, etc.).

### When to use?

- When your collection has a complex data structure under the hood, but you want to hide its complexity from clients.
- When you want to reduce duplication of the traversal code across your app.
- When you want your code to be able to traverse different data structures or when types of these structures are unknown
  beforehand.

### How to implement?

- Set up your concrete Iterator class implementing `Iterator`.
- Set up your concrete Collection class implementing `IteratorAggregate`.
- The `getIterator()` method of the concrete Collection should return a new instance of your concrete Iterator.
- To traverse the elements of your concrete Collection use `$collection->getIterator()` in the client code.

### Further notes

The pattern is very common in PHP code. Many frameworks and libraries use it to provide a standard way for traversing
their collections.