# Portfolio 2

For SDU class Linux for Embeded Objects

### Prerequisites

You'll need LXC installed on your raspberry pi zero. 
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


## Unprivileged access and Network





## The containers



## For Container C1


## For Container C2


## On a computer connected to the Pi
Open http://raspberrypi.local/
This is assuming:
Both containers are up and running and have IP's (can be checked using "lxc-ls -f")
Socat command is running on container C2




## To do when PI reboots 

If you reboot the PI you'll need to do a few steps to get everything working again. 
* Start both containers
* Directing external traffic to container C1
* Launch socat script on C2



