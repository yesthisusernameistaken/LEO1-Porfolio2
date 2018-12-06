# Portfolio 2

For SDU class Linux for Embeded Objects

### Prerequisites

You'll need LXC install on your raspberry pi zero. 
You'll also need access to the internet as the pi needs to download the image for the container. 

### Some useful commands

Delete container:
````
lxc-destroy -n C1
````
Check container is there and running
This will also tell you if the container has an IP
````
lxc-ls -f
````
Start container:
````
lxc-start -n C2
````
Stop container:
````
lxc-stop -n C2
````

To enter a container: 
````
lxc-attach -n C1
````
To exit you will need to shutdown the container as if you were using a linux based machine.

To run a command in a container without launching it, you can use: 
````
sudo lxc-attach -n C1 -- £££££££ 
````
This will run the £££££££ commands as if you're doing it in the container.

To install software use "apk add", not "apt-get". This is due to the use of alpine. 

Examples of HTML code. This can be used to edit the index.php file on C1
https://www.w3schools.com/html/html_examples.asp


Before creating a container, check networking and unprivileged section! 


A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests
