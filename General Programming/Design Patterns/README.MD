# Design Patterns

Design patterns are a general, reusable solution to a commonly ocurring problem within a given context in software design. While it isn't a finished design, it's more so a blueprint for how to solve a problem in a reusable way. Design patterns are formalized best practices that should be known when designing an application or system.

## Singleton

This pattern is used when you need an object that only needs to be instantiated once. 

The class needs to declare a private constructor to prevent people instanstiating it from outside the class. A static field of the type of the singleton is also needed. A method getInstance() assures that only one instance of this class is created at runtime.

```java
public class SingletonSample {
   private static SingletonSample instance = null;

   private SingletonSample() {
   }

   public static SingletonSample getInstance() {
      if(instance == null) {
         instance = new SingletonSample();
      }
      return instance;
   }
}
```

## Initialization on Demand Holder

This pattern is similar to the singleton, however, this implementation is thread safe.

This type of singleton does not initialize the instance until getInstance() is called.

```java
public class SingletonSample {
    private SingletonSample() {
    }

    public static SingletonSample getInstance() {
        return SingletonSampleHolder.INSTANCE;
    }

    private static class SingletonSampleHolder {
        private static final SingletonSample INSTANCE = new SingletonSample();
    }
}
```

## The Strategy and the Factory Pattern

This is two patterns in one, the strategy and the factory. When combined, you can create objects from a given qualifier like so:

```java
public interface Building {
    String getType();
}
```

```java
public class House implements Building {
    public String getType(){
        return "house"
    }
}
```

```java
public class Edifice implements Building {
    public String getType(){
        return "edifice"
    }
}
```

```java
public class BuildingFactory {
    private static Map<String, Building> instances;

    static {
        instances = new HashMap<>();

        instances.put("house", new House());
        instances.put("edifice", new Edifice());
    }

    public static <T extends Building> T getBuilding(String type){
        return (T) instances.get(type); 
    }
}
```

```java
Building building = BuildingFactory.getBuilding("house");
```

For specific building, you just need to give a building type and one will be returned, or null if there is no instance for this type. It is very useful and gives a chance to use the most of polymorphism.

## Fluent Builder

As some objects require lots of parameters, using the constructor or setters will make code ugly and hard to understand. The builder pattern can help with this.

While this example class isn't too big, it still shows the idea behind this pattern.

```java
public class Product {
    private String id;
    private String name;
    private String description;
    private Double value;

    private Product(Builder builder) {
        setId(builder.id);
        setName(builder.name);
        setDescription(builder.description);
        setValue(builder.value);
    }

    public static Builder newProduct() {
        return new Builder();
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Double getValue() {
        return value;
    }

    public void setValue(Double value) {
        this.value = value;
    }

    public static final class Builder {
        private String id;
        private String name;
        private String description;
        private Double value;

        private Builder() {
        }

        public Builder id(String id) {
            this.id = id;
            return this;
        }

        public Builder name(String name) {
            this.name = name;
            return this;
        }

        public Builder description(String description) {
            this.description = description;
            return this;
        }

        public Builder value(Double value) {
            this.value = value;
            return this;
        }

        public Product build() {
            return new Product(this);
        }
    }
}
```

```java
Product product = Product.newProduct()
                       .id(1l)
                       .description("TV 46'")
                       .value(2000.00)
                       .name("TV 46'")
                   .build();
```

## Chain of Responsibility

Chain of responsibility pattern breaks our code into little pieces and organizes them into sequential steps.

This is of benefit when the business logic of the application is complex, as the complexity makes our code harder to understand, as well as harder to track, log, and so forth. With CoR we can break the code into commands and keep the logic all in one place. We can also reorganize however we want, making our code decoupled thus solving our complexity problem.

```java
public interface Command<T>{
    boolean execute(T context);
}
```

```java
public class FirstCommand implements Command<Map<String, Object>>{
    public boolean execute(Map<String, Object> context){
        //doing something in here
    }
}

```

```java
public class SecondCommand implements Command<Map<String, Object>>{
    public boolean execute(Map<String, Object> context){
        //doing something in here
    }
}

```

```java
public class Chain {
    public List<Command> commands;

    public Chain(Command... commands){
        this.commands = Arrays.asList(commands);
    }

    public void start(Object context){
        for(Command command : commands){
            boolean shouldStop = command.execute(context);

            if(shouldStop){
                return;
            }
        }
    }
}

```

```java
Chain chain = new Chain(new FirstCommand(), new SecondCommand());
Map<String, Object> context = new HashMap<>();
context.put("some parameter", "some value");
chain.start(context);
```

## Template Method

This pattern defines a skeleton for an operation. It is very useful when you have common method calls but different behaviors. This pattern is based on polymorphism.

```java
public abstract class Animal {
    public abstract void makeSound();
    public abstract void eatFood();
    public abstract void sleep();

    public void doEveryday(){
        makeSound();
        eatFood();
        sleep();
    }
}
```

```java
public class Dog extends Animal {
    public void makeSound(){
        //bark!
    }

    public void eatFood(){
        //eat dog food
    }

    public void sleep(){
        //sleep a lot!
    }
}
```

```java
public class Cat extends Animal {
    public void makeSound(){
        //meow!
    }

    public void eatFood(){
        //eat cat food
    }

    public void sleep(){
        //sleep just a little bit
    }
}
```

## State Pattern

The state pattern deals with objects which have more than one state. An example of this is a radio which can be on or off. 

While that is a simple example, there are some objects which have lots of states, and this pattern can help. You can define rules to create final states and states that requires a previous state to be executed. For example, with the radio, you can only turn it off if the radio is on.

```java
public class Radio {
    private boolean on;
    private RadioState state;

    public Radio(RadioState state){
        this.state = state;
    }

    public void execute(){
        state.execute(this);
    }

    public void setState(RadioState state){
        this.state = state;
    }

    public void setOn(boolean on){
        this.on = on;
    }

    public boolean isOn(){
        return on;
    }

    public boolean isOff(){
        return !on;
    }
}

```

```java
public interface RadioState {
    void execute(Radio radio);
}
```

```java
public class OnRadioState implements RadioState {
    public void execute(Radio radio){
        //throws exception if radio is already on
        radio.setOn(true);
    }
}

```

```java
public class OffRadioState implements RadioState {
    public void execute(Radio radio){
        //throws exception if radio is already off
        radio.setOn(false);
    }
}
```

```java
Radio radio = new Radio(new OffRadioState()); //initial status
radio.setState(new OnRadioState());
radio.execute(); //radio on
radio.setState(new OffRadioState());
radio.execute(); //radio off
```

---

## Sources of Information

The majority of this document is formed from research through google. Some of the sources include:

* The dev piece

## Contributing

Interested in contributing to this document? I'd love to hear any suggestions on what to improve, any contributions you can make, and any errors I have made. Please feel free to [email me](mailto:haydencallum4@gmail.com) and I'll be in touch asap.
