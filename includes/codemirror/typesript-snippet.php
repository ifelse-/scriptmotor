
/**************** 
 Export Class:
 An exported class is accessible in other modules/files.
******************/

export class MyClass {
  constructor() {}
}

// The "export" keyword is used in TypeScript to make a variable, function, or class accessible in other files/modules. 

export const someValue = 42;


/**************** 
 Public:
 Properties and methods marked as public are accessible from anywhere.
******************/

class Person {
  public name: string;
  constructor(name: string) {
    this.name = name;
  }
}


/**************** 
 Private:
 Private properties and methods are only accessible within the class.
******************/

class BankAccount {
  private balance: number;
  constructor(initialBalance: number) {
    this.balance = initialBalance;
  }
}


/**************** 
 Protected: 
 Protected properties and methods are accessible within the class and its subclasses.
******************/

class Vehicle {
  protected speed: number;
  constructor(speed: number) {
    this.speed = speed;
  }
}


/**************** 
 Read-Only: 
 A read-only property can only be assigned a value when it's declared or in the constructor.
******************/

class Circle {
  readonly radius: number;
  constructor(radius: number) {
    this.radius = radius;
  }
}


/**************** 
 Default (public by default): 
 If a member (property or method) doesn't have an access modifier, it's public by default.
******************/

class Example {
  name: string; // Public by default
  constructor(name: string) {
    this.name = name;
  }
}


/**************** 
 Enum:
 An enum in TypeScript is a way to create a named set of constant values. It is used to represent a fixed set of values, often used for things like days of the week or status codes.
******************/

enum Days {
  Sunday,
  Monday,
  Tuesday,
  Wednesday,
  Thursday,
  Friday,
  Saturday
}


/**************** 
 Enum:
 An enum in TypeScript is a way to create a named set of constant values. It is used to represent a fixed set of values, often used for things like days of the week or status codes.
******************/

enum Days {
  Sunday,
  Monday,
  Tuesday,
  Wednesday,
  Thursday,
  Friday,
  Saturday
}