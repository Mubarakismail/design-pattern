# Design Patterns in PHP

This repository showcases various design patterns implemented in PHP, organized into three main categories: Creational, Structural, and Behavioral. Each pattern includes a brief description and its respective implementation.

## Creational Patterns

Creational patterns focus on class instantiation or object creation. They help make a system independent of how its objects are created, composed, and represented.

- **Builder**: Separates the construction of a complex object from its representation, allowing the same construction process to create different representations.

- **Factory Method**: Defines an interface for creating an object but allows subclasses to alter the type of objects that will be created.

- **Prototype**: Specifies the kinds of objects to create using a prototypical instance and creates new objects by copying this prototype.

- **Singleton**: Ensures that a class has only one instance and provides a global point of access to it.

## Structural Patterns

Structural patterns deal with object composition, ensuring that if one part of a system changes, the entire system doesn't need to do the same.

- **Adapter**: Allows the interface of an existing class to be used as another interface. It is often used to make existing classes work with others without modifying their source code.

- **Bridge**: Decouples an abstraction from its implementation so that the two can vary independently.

- **Composite**: Composes objects into tree structures to represent part-whole hierarchies, allowing clients to treat individual objects and compositions of objects uniformly.

- **Facade**: Provides a simplified interface to a larger body of code, such as a complex subsystem.

## Behavioral Patterns


Behavioral patterns focus on communication between objects, what goes on between objects, and how they operate together.


- **Chain of Responsibility**: Passes a request along a chain of handlers. Each handler decides either to process the request or to pass it to the next handler in the chain.


- **Command**: Encapsulates a request as an object, thereby allowing for parameterization of clients with different requests, queuing of requests, and logging of the requests.

[//]: # ()
[//]: # (- **Iterator**: Provides a way to access the elements of an aggregate object sequentially without exposing its underlying representation.)

[//]: # ()
[//]: # (- **Mediator**: Defines an object that encapsulates how a set of objects interact, promoting loose coupling by preventing objects from referring to each other explicitly.)

[//]: # ()
[//]: # (- **Memento**: Captures and externalizes an object's internal state so that it can be restored later without violating encapsulation.)

[//]: # ()
[//]: # (- **Observer**: Defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.)

[//]: # ()
[//]: # (- **State**: Allows an object to alter its behavior when its internal state changes. The object will appear to change its class.)

[//]: # ()
[//]: # (- **Strategy**: Defines a family of algorithms, encapsulates each one, and makes them interchangeable. Strategy lets the algorithm vary independently from clients that use it.)

[//]: # ()
[//]: # (- **Template Method**: Defines the skeleton of an algorithm in the superclass but lets subclasses override specific steps of the algorithm without changing its structure.)

[//]: # ()
[//]: # (- **Visitor**: Represents an operation to be performed on the elements of an object structure, allowing you to define a new operation without changing the classes of the elements on which it operates.)

## Getting Started

To explore a specific design pattern:

1. Navigate to the corresponding directory.
2. How to run
3. ``` bash
   php folder-name/index.php
   ex: php Singleton/index.php 
3. Review the implementation files and accompanying documentation or comments within the code.

### Ensure you have PHP installed on your system to run the examples.
