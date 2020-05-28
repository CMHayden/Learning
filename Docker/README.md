# Docker

Docker is a tool designed to make it easier to create, deploy and run applications by using containers. The containers allow a developer to package up an application with all of the parts it needs, such as libraries and other dependencies, and deploy it as one package. By doing so the developer can rest assured that the application will run on any Linux machine regardless of any customized settings the machine might have that could differ from the machine used for writing and testing the code.

## Why Docker?

Docker has many benefits which will be discussed in depth in this section. These are that it is a tool which enables DevOps, it solves dependency conflicts, it allows for easy scaling up, allows for seamless upgrades, and international commerce already uses containers!

### A DevOps Enabler Tool

Docker is an engine that runs containers. Containers allow for solving challenges created in the DevOps trend. In DevOps, the Dev and Ops teams have conflicting goals. The Dev team aims for frequent deployments and updates, along with the easy creation of new resources. The Ops team seeks stability of production apps, management of infrastructure instead of applications, and monitoring and control over the operation.

In agile, you seek to frequently publish applications to ensure deployment becomes a normal routine. This is to ensure the "go-to-production" event feels normal, frequent, and completely mastered instead of a dreaded distaster. The Ops team will aim for stability, as should anything go wrong with deployment it is them who face the wrath of the user.

Containers make deployment easy, as it as simple as running a new container, routing users to the new container and deleting the old container. It can even be automated by orchestration tools. As it is easy to do, we can use multiple containers to serve a single application for increased stability during updates.

Without containers, Ops need to handle the hosting environment: runtimes, libraries, and OS needed by the application. Where as with containers they just need one methodology that can handle the containers you provide no matter what's inside them. This is a considerable advantage for containers when it comes to DevOps.

### Solves Dependency Conflicts

A typical web application looks somewhat like this:

| Wordpress         |
| ----------------- |  
| Wordpress 4.9     |
| PHP 5.6           | 
| Apache            |
| app/*             |

The application is made of files served by a HTTP server (Apache in this case but could be Kestrel, IIS, NGINX...), a runtime (PHP 5.6), and a development framework (WP 4.9).

Without containers, the dependencies and files are all placed together on a server. Since managing these dependencies is time-consuiming, similar apps are normally grouped on the same server, sharing their dependencies. This would mean to create a second wordpress app, both apps would share the HTTP server, runtime and framework, and the difference would like within the app/* folder.

Now suppose you want to upgrade PHP from 5.6 to 7.2. However, this change breaks the applications therefore need to be updated. You must update both applications when proceeding with the upgrade. On a server that may host many apps of this type, this would be a daunting task which would delay the upgrade until all apps are ready.

Anotther similar problem ocurrs if you want to host a third application on the same server, where this application uses Node.JS with a package that, when installed, changes a dependency used by PHP. 

Containers solve this problem since eahc app has its own container with its own dependencies. This would look somewhat like this within the server, where each column represents a container:

| Application 1     | Application 2   |
| ----------------- | --------------- |
| Wordpress 4.9     | Wordpress 5.0   |
| PHP 5.6           | PHP 7.2         |
| Apache            | Apache          |
| app1/*            | app2/*          |

Each container holds its own dependencies, meaning migrating the PHP runtime from 5.6 to 7.2 in a container will not affect other containers. Any other container that would use for instance, Node.JS, would not interfere with any of the wordpress containers.

### Allows Easy Scaling Up

When a server application needs to handle higher usage than what a single server can handle, the solution involves placing a reverse proxy infront of it and duplicating the server as many times as needed. In the previous Wordpress example this would involve duplicating the server along with all of the dependencies.

This would make things worse when upgrading, as each servers dependencies would need upgraded along with all of the conflicts that may cause.

Containers have a solution for this. As containers are based on images, you can run as many containers as you wish from a single image. All the containers will support the exact same dependencies.

Better yet, when using an orchestrator, you merely need to state how many containers you want and the image name and the orchestrator creates that many containers on all of your docker servers. We'll see this more later.

### Allows Seamless Upgrades

Even in scaled-up scenarios, a container-based approach makes tricky concepts seem trivial. Without containers, updating every server including dependencies is not a fun task.

Of course, in such a case, the update process depends on the application and its dependencies.

By using containers, it's a simple matter of telling the orchestrator that you want to run a new image version, and it gradually replaces every container with another one running the new version. Whatever technology stack is running inside the containers, telling the orchestrator that you want to run a new image version is a simple command.

The orchestrator replaces one container, and then moves on to the other ones. While the new container is not ready, traffic is being routed to the old version containers so that there is no interruption of service.

### International Commerce Already Uses Containers

While it may seem like an absolute madness to use this comparison, international commerce faced the same delivery problem; we are trying to deliver software as fluently as possible and commerce needs to deliver goods as fluently as possible.

In the old times, it took days to load a ship with goods. The ship would remained docked for days while each good was being loaded onto it. Goods had varying sizes and handling precautions, and ships had variyting storage types and sizes. This lead to a slow and costly loading and unloading process, due to the cost involved in all the people needed along with the cost of keep the ship docked.

A solution was found: containers. The idea is straightforward, use boxes of a standard size and fill them with whatever you want. You now only need to deal with standardized boxes no matter what they contain. The ship can now be tailored to host many containers in a way that allows for fast loading and unloading with standardized tools like cranes. In fact, the whole transport chain (trucks, trains...) can be tailored to manage containers efficiently.

Docker containers are very similar. When you create an image, you stuff your software into a container image. When a machine runs the image, a container is created. Container images and containers can be managed in a standardized way, which allows for standard solutions during a containerized software's lifecycle: common build chain, common image storage, common way to deploy and scale-up, common hosting of running containers, common control and monitoring of running containers, and common ways to update running containers to a new version.

The most important part is, that whatever the software inside the container is, it can be handled in a stadardized way. 

Isn't that a DevOps' dream?

## Get Docker Up and Running

This section will discuss the different versions of Docker and how to set them up.

### Various Products for Various Needs

In a production environment that runs containers hosting critical applications, you would be safer to use Docker Enterprise. However, on your development machine or a continous integration build machine, you can use the free docker engine community or docker desktop on your machine.

| Use                                   | Product                                   |
| ------------------------------------- | ----------------------------------------- |
| Developers machine                    | Docker Engine Community or Desktop        |
| Small server, small expectations      | Docker Engine Community                   |
| Serious stuff, critical applications  | Docker Engine Enterprise or Kubernetes    |

Whatever edition you install, you can check your installation by running the command below. The output should be a hello message from docker.

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run hello-world
Hello from Docker!
This message shows that your installation appears to be working correctly.
```

### Community on a Developer or CI Machine

This section will discuss the instalation process of Docker community edition.

**Windows 10**

Docker desktop requires a Professional or Enterprise 64-bit edition of windows 10 because it is based on Hyper-V. If your version of Windows does not meet these requirements, you may use the older [Docker Toolbox](https://docs.docker.com/toolbox/overview/) based on Virtual Box.

Before installing Docker Desktop it's important that you enable Hyper-V and hardware virtualization in the BIOS. Then you can follow [these instructions](https://docs.docker.com/docker-for-windows/install/).

During installation, you will be asked to use a Windows or Linux container. I'd suggest Linux containers since you can change your mind at any moment later on, and the majority of container images are based on Linux.

**Linux**

There are other Docker packages available and you can simply follow the steps depending on your version, by selecting one of the following versions: [CentOS 7](https://docs.docker.com/engine/install/centos/), [Debian or Raspbian](https://docs.docker.com/engine/install/debian/), [Fedora 26+ 64-bit](https://docs.docker.com/engine/install/fedora/), [Ubuntu Bionic, Xenial or Trusty 64-bit](https://docs.docker.com/engine/install/ubuntu/).

Whatever your Linux flavor, there are common post-installation steps [here](https://docs.docker.com/engine/install/linux-postinstall/). Make sure that you read them carefully and double-check them if you can't run the hello-world test.

**Mac**

Docker Desktop requires a Mac OS Sierra 10.12 or above. If you have an older version you may use the [Docker Toolbox](https://docs.docker.com/toolbox/overview/) based on Virtual Box.

### Enterprise on a Server

This section will discuss the installation process of Docker enterprise edition on a server.

**Windows Server 2016**

Docker Enterprise is available for free to windows server 2016 customers. Just [check the instructions](https://docs.docker.com/ee/docker-ee/windows/docker-ee/).

**Linux**

Docker Enterprise can be run on CentOS, Red Hat, SUSE, and Ubuntu amongst others. You can check if your version of Linux by using the [list of all supported OS](https://hub.docker.com/search/?type=edition&offering=enterprise).

**Cloud**

Docker enterprise is available as a template [for Azure](https://hub.docker.com/editions/enterprise/docker-ee-azure) and [for AWS](https://hub.docker.com/editions/enterprise/docker-ee-aws).

## Basic Concepts

Docker is built around three basic concepts. Containers, images and registries. This section will cover these concepts.

**Containers**

A container is what we run and host in docker. You can think of it as an isolated machine or a virtual machine.

From a conceptual point of view a container runs inside the Docker host isolated from the other containers and the host operating system. It can't see other containers, physical storage or get incoming connections unless explicitly stated. It has everything it needs to run: an OS, packages, runtimes, files, environment variables, standard input, and output.

One docker server can have multiple of the same containers. This is typically the case when a server hosts a release and a test version. This allows for hosting both versions on the same server where each containers has its own ID.

**Images**

Any container that runs is created from an image. An image describes everything that is needed to create a container; it's a template for containers. You can create as many containers as needed from a single image.

**Registries**

Images are stored in a registery. Containers use the registry to share images to allow for duplicating containers.

## Use Docker Images

 This section will discuss how to use docker images.

 ### Run a Container

 This section will explain how to run the hello-world image, along with what happens in the background when running this container.

 With Docker fully installed, we run the following command:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run hello-world
```

The output from this is:

```bash
Hello from Docker!
This message shows that your installation appears to be working correctly.

To generate this message, Docker took the following steps:
 1. The Docker client contacted the Docker daemon.
 2. The Docker daemon pulled the "hello-world" image from the Docker Hub.
    (amd64)
 3. The Docker daemon created a new container from that image which runs the
    executable that produces the output you are currently reading.
 4. The Docker daemon streamed that output to the Docker client, which sent it
    to your terminal.

To try something more ambitious, you can run an Ubuntu container with:
 $ docker run -it ubuntu bash

Share images, automate workflows, and more with a free Docker ID:
 https://hub.docker.com/

For more examples and ideas, visit:
 https://docs.docker.com/get-started/
```

And done! You've ran your first container! Here's how it works:

1. The command requests Docker to create and run a container based on the *hello-world* image.

2. Since the *hello-world* image wasn't already present on your disk, Docker downloaded it from a default registry called Docker Hub.

3. Docker created a container based on the *hello-world* image.

4. The *hello-world* image states that, when started, it should output text to the console, which is the image you see as the container is running.

5. The container is stopped.

If you run the command again, you'll notice it runs a lot quicker. This is because it skips the second step as the image is already present on your disk. This is a simple optimization which helps Docker to use less of a machine's resources.

### Container Management

Container management is mostly carried out with the command line. If you need more information about a command you can use the *--help* flag. Here is an example of how to get more information about the run command used previously:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run --help
```

Here are the commands you need to know with docker:

* **docker ps** lists the containers that are still running. The *-a* flag can be added to see all containers that have stopped.

* **docker logs** gets the logs of a container, even when it has stopped. Along with the docker logs command, you must include a parameter (name or ID) to state which container you want the logs from.

* **docker inspect** gets detailed information about a container. This command also takes a parameter of name or ID of the container you want to inspect.

* **docker stop** deletes a container that's still running. This command needs to know which container to stop so must be supplied with a name or ID of a container.

* **docker rm** deletes a container, even if it is not running. This accepts a container name or ID as a parameter.

### Post-Mortem Inspection

This section will discuss how you can inspect a stopped container, along with how to delete it.

The hello-world container shown above stops because its only job is to output text. So we will use this to get a better grip of container tooling.

Run the following command on command-line:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker ps
```

If the hello-world container is the only container you have ran, then there should be no output. Now run the following command:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker ps -a
```

You should see a container ID, an image "hello-world" and a status of exited. You may also see a time stamp of when it was created, a name for it and a ports section. The container ID should be noted as it allows for running commands on the container.

Now if you run the following command, changing the ID "48bab7f673b3" for your container's ID:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker logs 48bab7f673b3
```

You will see the exact same text as when you ran the container. In real-world scenarios, you'll have containers running in the background and this command lets you see their output.

Run this command changing the ID "48bab7f673b3" to your containers ID same as with the previous example.

```bash
 cmhayden@Callums-MacBook-Pro ~ docker inspect 48bab7f673b3
```

This gives you information about the container, even if it's stopped. In real world scenarios, this may prove useful for understanding what happens inside your containers. 

While information is power, this information takes up space. Due to this, once you're finished with a completly done container, you can free up this space again using the the docker rm command as shown below:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker rm 48bab7f673b3
```

This will completely delete the container with the id "48bab7f673b3". This can be tested by running the following commands which will give an output of an error as no such containers exist.

```bash
 cmhayden@Callums-MacBook-Pro ~ docker ps -a
 cmhayden@Callums-MacBook-Pro ~ docker logs 48bab7f673b3
 cmhayden@Callums-MacBook-Pro ~ docker inspect 48bab7f673b3
```

### More About Docker Run

The docker run command is like buying a new computer, executing a command on it, and throwing it away. Each time a container is created from an image, you get a new isolated environment to play with inside the container.

The contents of the ocntainer depend on the image the container is based on. After the image name, you can give commands for what you want executed inside the container.

Let's illustrate the new-computer-that-you-trash methaphor using the alpine image. This image is a very small linux image that does enough for this purpose. Let's run a container and get it to display its hostname running the following command:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run alpine printenv
```

With this command we are asking for a container to be created using the alpine image, and for the container to execute the *printenv* command. This command is one of the binary programs packed into the alpine image. The output will include the path, hostname and home of the container.

If the same command is run two more times to create two more alpine containers and have them display their hostname, their hostnames are all different between eachother.

What needs to be understood is that Docker is a tool that allows for getting the equivalent of a disposable, single-time use computer. Once that's understood a whole new world opens for you. You come from a world where getting a new machine and configuring it required enough efforts to justify keeping it, desptie all the side effects that come with each subsequent use. In the container's world, getting a new enviornment is cheap enough for it to get many of them.

To clean up your containers after this section, you can run the following command:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker container prune -f
```

This command removes all stopped containers, with the -f tag specifying an implicit confirmation to proceed and delete all stopped containers.

### Running a Server Container

This section will cover server containers and how to run long-lived ontainers.

In previous sections we have shown how to run short-lived containers. They normally do some process, display some output and stop. However, there's a very common use for long-lived containers: server containers. Be it for a web application, an API, or a database, you want a container that continously listens for incoming network connections and is potentially long-lived.

**NOTE** it's best not to think about containers as long-lived, even when they are. Don't store information inside containers. In other words, ensure your containers are stateless. A stateless container never stores its state when run, while stateful containers store some information about their state each time they are run. Docker container's are very stable, however, stateless containers allows for easy scaling up and recovery.

In short, a server container is long-lived and listens for incoming network connections.

**Running a long-lived container**

In previous examples we remained connected to the container from our command line with the docker run command, making it impractical for running long-lived containers.

To disconnect while allowing the long-lived container to continue to run we need to use the -d (--detach) flag on the docker run command. Running a detached container immediately gives you control over your command line back, and the standard output of the container is no longer redirected to your command-line.

Suppose we want to run a ping command. This can be done with the Linux alpine container like so:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run alpine ping www.docker.com
```

This command will run ping continously pininging the Docker server. It is an example of a long-lived container, however, it is not detached from the command-line. This can be detached by using *CTRL+C* allowing the command to continue to run in the background. However, it is easier to run it as detached from the beginning like so:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run -d alpine ping www.docker.com
```

With the use of the -d flag, the container starts but we do not see the output. Instead the docker run command returns the ID of the container that was just created. While the ID may be long, we don't need the full ID for commands. As long as there is no ambiguity you can use the start of the ID in commands that require an ID.

The container is still running and can be seen using the *docker ps* command. The output is similar to this:

| Container ID    | Image  | Status       |
| --------------- | ------ | ------------ |
| 789b08ce24b1    | Alpine | Up 2 minutes |

The status is telling us that the container has been running for two minutes and is still alive.

We can interact with the container using the commands shown previously such as *docker logs* to see its output, *docker inspect* to get detailed information, and even *docker stop* to kill the command.

Let's check the output of the container using the following command with just the beginning of our container ID

```bash
 cmhayden@Callums-MacBook-Pro ~ docker logs 789b
```

This will print out the whole standard output of the container from its beginning. We can get just a portion of the output by using the *--from*, *--until*, *--tail*, or *--since*. Lets check the most recent 10s of the logs:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker logs --since 10s 789b
```

In real-world applications with multiple running containers, you would generally want to redirect the containers' output to log management services such as papertrail. However, it can be useful to get the last output of a container for debugging purposes.

To stop and clean up the container, we can use the following commands:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker stop 789b
 cmhayden@Callums-MacBook-Pro ~ docker rm 789b
 cmhayden@Callums-MacBook-Pro ~ docker ps -a
```

The last command is simply to ensure the container is completly gone.

**Listening for Incoming Network Connections**

By default, a container runs in isolation, hence, it doesn't listen for incoming connections. You must explicitly open a port on the host machine and map it to a port on the container.

Suppose I want to run the NGINX web server. It listens for incoming HTTP requests on port 80 by default. If I simply run the server, my machine does not route incoming requests to it unless I use the *-p* switch on the docker run command.

The *-p* switch takes two parameters; the incoming port you want to open on the host machine, and the port to which it should be mapped inside the container. For instance, here is how I state I want my machine to listen for incoming connections on port 8085 and route them to port 80 inside a container than runs NGINX:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run -d -p 8085:80 nginx
```

The -d flag for detaching the container is not mandatory, however, as we are running a server container it's a good idea to keep in the background. An NGINX server container starts and I get its ID.

Now I can run a bowser and query that server using the http://localhost:8085 URL. This will show the welcome to nginx screen. If not, then try to stop and delete the container and try again making sure the ports are correctly specified.

Since the container is running in the background, its output isn't displayed on the terminal. However, with the docker logs command we can still view it

```bash
 cmhayden@Callums-MacBook-Pro ~ docker logs 8451
```

This will allow us to see a trace of the browser's HTTP request that NGINX received.

The container continues to run and serve incoming requests on port 8085. We can see this by running the docker ps command. To kill it we use the stop and rm commands like so:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker stop 8451
 cmhayden@Callums-MacBook-Pro ~ docker rm 8451
```

**Wrapping It Up**

One of the things I like most about containers is that they allow me to use any software without polluting my machine. Normally I would be hesitant about trying out new software as it means installing dependencies which may mess up my normal environment. With containers, even big pieces of server software can be tried out without polluting my machine.

To illustrate this point, lets run Jenkins. Jenkins is a full continous integration server coded with Java. With Docker, we don't need to have Java nor any dependency on our machines to run a Jenkins server. By default, Jenkins listens on port 8080, so we can use the following command to run a Jenkins container:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run -p 8088:8080 jenkins
```

**NOTE** we could add a *-d* flag since this is a long-running process. However, we are not using it here so we can directly see the output. For a real deployment, the -d flag should be used, with docker logs command to view output when needed.

Once the command finishes creating the container, we can go to http://localhost:8088 and finish the setup in the browser, which will result in a full blown Jenkins.

If you chose you do not want to use Jenkings, you can simply run the docker stop and docker rm commands. We can also run a separate Jenkings server by executing the docker run command again using another port.

Such isolation and ease of use at a low resource cost is a hugh advantage of containers. 

When using such images, you could wonder where the data is stored. Docker uses volumes for this and will be discussed next.

### Using Volumes

When a container writes files, it writes them inside the container. This means that when the container dies (host machine restarts, container is moved, it fails...) all of the data is lost. It also means if you run the same container multiple times in a load-balancing scenario, each container will have its own data, leading to inconsistent user experience.

For simplicity sake, a rule of thumb is to ensure containers are stateless, such as by storing data in an external database or distributed cache. However, sometimes you need to store files in a place where they are persisted; this is done with volumes.

Using a volume you map a directory inside the container to a persistent storage. Persistent storages are managed with drivers and they depend on the host. An example is Amazon S3 from AWS. With docker desktop you can map volumes to actual directories on the host system. This is done using the *-v* flag on the docker run command.

Suppose you run a MySQL database with no volume. Any data stored in it will be lost when the container is stopped or restarted. In order to avoid data loss, you can use a volume mount like so:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run -v /your/dir:/var/lib/mysql -d mysql:5.7
```

This will ensure that any data written to the */var/lib/mysql* directory inside the container is actually written to the */your/dir* directory on the host system. This ensures that no data is lost when the container is restarted.

### Where Do Images Come From?

Each container is created from an image. You provide the image name to the *docker run* command. Docker first looks for the image locally and uses it when present. When the image is not present locally, it is downloaded from a registery. You can list the local images using the following command:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker images ls
```

When an image is published to a registery, its name must be `<repository_name>/<name>:<tag>`. Here, *tag* is optional. When missing it is considered to be latest by default. *repository_name* can be a registery DNS or the name of a registry in the Docker Hub.

All of the images used so far in this document have been downloaded from Docker Hub as they are not DNS names. 

Although the docker run commands downloads images automatically when missing, you may want to download an image manually. This is done with the docker pull command, which forces an image to download whether it is already present or not. Here are scenarios where using a docker pull command is relevant:

* You expect that the machine which runs the containers does not have access to the registeries at the time of running the containers.

* You want to ensure you have the latest version of an image.

## Create Docker Images

This section will discuss how to create your own simple image. Inside our images we can add our porograms and their dependencies so that multiple containers can be created from those images and live happily ever after.

### Create a Simple Image

A Docker image is created using the docker build command and a Dockerfile file. The Dockerfile file contains instructions on how the image should be built.

**NOTE** The *Dockerfile* can have any name. Naming it *Dockerfile* makes it easier for others to understand its purpose when they see the file in your project. It also means we don't need to state the file name when using the *docker build* command.

In this section we will create a basic image for a container that displays "hello cmhayden/learning" when its run.

For this, we need a file called Dockerfile that describes how the image should be built. A Dockerfile always begins with a *FROM* instruction because every image is based on another base image. This is a powerful feature since it allows for extending images that may already be rather complex.

As we only need a simple text output, we can use a Debian Linux image. Here's what the Dockerfile is looking like:

```FROM debian:8```

This alone is not enough of course. While this gets a Debian Linux basis, there's no command that could display "hello cmhayden/learning". This is done using the CMD instruction which specifies which executable is run when a container is created using our image and provides optional arguments.

Heres what our Dockerfile is looking like now:

```
FROM debian:8

CMD ["echo", "Hello cmhayden/learning"]
```

**NOTE** both the program to run and its arguments are provided as a JSON array of strings.

In order to create an image from the Dockerfile file, we need to run the docker build command. To do this, we use the following command in the terminal in the folder where the Dockerfile file is located:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker build -t hello .
```

The *-t* flag is used in front of the image. An image can be created without a name, it would have an auto-generated unique ID, so it is an optional parameter on the docker build command. The dot at the end of the command specifies which path is used as the build context, and where the Dockerfile is. If the dockerfile has a different name or is in a different directory, we need to use a *-f* flag in order to provide the file path.

The docker build command just created an image named hello which is stored locally on our computers, and can be run in the same way as any other image:

```bash
 cmhayden@Callums-MacBook-Pro ~ docker run --rm hello
```

This command runs the recently build hello image, and removes it when completed.

As expected, the docker run command above simply prints the message *Hello cmhayden/learning*. From here you may want to publish the image for others to use. We'll see how to do this in the following section.

So in this section, we have created an image by creating a Dockerfile and running a docker build command, and we ran a container from the image created.

### Creating an Image Including Files

The previous image created didn't need anything other than what was contained within the base image. In a real-world scenario however, we will likely need files to be part of an image.

Suppose we have the following index.html file:

```html
<html>
  <body>
    <h1>Hello !</h1>
    <div>I'm hosted by a container.</div>
  </body>
</html>
```

If we need to create an image which includes a web server to serve this page we could use the debian base image and add instructions to the dockerfile that install NGINX, but it is easier to base the work on images that are already configured and tested. The Docker Hub contains an NGINX image where NGINX is already installed with a configuration which serves files found in the /usr/share/nginx/html directory.

We next need to create the following dockerfile in the same folder as the HTML file:

```
FROM nginx:1.15

COPY index.html /usr/share/nginx/html
```

Apart from the nginx base image, you can see a COPY instruction. Its first parameter is the file to be copied from the build context and its second parameter is where it should be copied to.

The build context is the directory in which you ran the docker build command. Its contents are available for copy instructions to use, but only during the image build process. 

This time the dockerfile does not need a CMD instruction to run the NGINX server as the base nginx:1.15 image already contains this instruction.

The next step is running the following command within the same folder as our index.html and dockerfile:

```bash
docker build -t webserver .
docker run --rm -it -p 8082:80 webserver
```

These commands build a webserver from the dockerfile instructions, then starts a container listening to our machine's 8082 port and redirects incoming connections to the container's 80 port. We can view our webserver at http://localhost:8082 which displays the HTML file.

When running the container, you may notice the use of the -rm and -it flags. These are only for demo purposes and in reality a server container would be long-running so we'd run them without the flags.

The -it flag allows us to stop the container with ctrl+c from the command line.

The -rm flag ensures the container is deleted once it has stopped.

### Images are Created Locally

When running docker build command to build an image from a dockerfile, the image is stored locally on the computer where the command is run.

This allows for creating many containers from the locally created image, but most likely we want other devices to be able to run containers from the images we create. 

To see the images available locally we can use this command:

```bash
docker image ls
```

For me, my output is somewhat like this:

| Repository  | Tag    | Image ID     |
| ----------- | ------ | ------------ |
| webserver   | latest | c067edac5ec1 |
| hello       | latest | 347c4eed84cd |
| nginx       | 1.15   | f09fe80eb0e7 |
| debian      | 8      | ec0727c65ed3 |

Having images stored locally makes it faster to run a container from them, but there will be a time when some images are useless. To remove them, we can use the docker rmi command. It takes the image name or image id as a parameter. Here is an example of how I would delete the webserver image:

```bash
docker rmi c067edac5ec1
docker rmi webserver:latest
```

You should be more than able to complete exercise 2 now.

### Tags Matter

Earlier we saw that image names include a name and an optional tag that, when missing, is considered to be latest by default.

In the previous code snippets we didn't include a tag, therefore the default latest tag was used. This can be seen in the output of the docker image ls command ran before.

As long as you are creating simple software, running on a simple CI/CD pipeline, it can be fine to use the latest tag. In a simple scenario, you may:

1. Update the source code.

2. Build a new image with the latest tag.

3. Run a new container with the newest image.

4. Kill the previous container.

There's a caveat with this however, when using the docker run hello command on a distant machine, the distant machine doesnt know that there is a newer version of the hello:latest image. Due to this, you need to use the docker pull hello command on the distant machien in order for the newest version of your image to be downloaded to the machine.

**Why Would You Tag Your Images?**

Other reasons come to mind once you become more serious with your CI/CD pipeline. For instance you may want any or all of the following features:

* Be able to roll back to a previous version of an image if you detect a problem with the latest image.

* Run different versions in different environments. For instance, the latest version in a test environment and a previous version in a production environment.

* Run different versions at the same time, routing some users to the latest version and some to the previous cersions. This is known as a canary release.

* Deploy different versions to different users, and be able to run whatever version on your development machine while you support them.

If you ensure each released image has a different tag, you can run any of the scenarios mentioned above.

While we can tag our images however we want, common tags include:

* A version number (hello:1.0, hello:1.1, hello:1.2...).

* A Git commit tag (hello:2cd7e376, hello:3cd7e376...).

In order to apply a tag, just state it during your build command:

```bash
docker build -t hello:1.0 .
```

**Tags for Base Images**

Our images are based on other images; this is done with the *FROM* instruction in our dockerfiles. Just as we can tag our images, the base image we use can be the latest one or a tagged one.

In a previous example we have used a tagged image to create the webserver as we used nginx:1.15. It's tempting to always use the latest ones so that we are always running on up-to-date software. All we need to do is to omit the tag altogether or mention the latest one. 

**DON'T FALL FOR TEMPTATION** 

First of all, it doesn't mean that any running container will be based on the latest version of nginx. Docker is about having reproducible images, so the latest version is evaluated when you build your image, not when the container is run. This means that the version will not change unless we run the docker build command again.

Secondly, we are likely to run into trouble. What about the nginx image releasing a new version with breaking changes? If you build your image again, you may get a broken image.

Due to this it is recommended that you always specify the image tag. If you want to keep up to date with new releases of the base image, update the tag manually and make sure you test your image prior to releasing it.



## Contributing

Interested in contributing to this document? I'd love to hear any suggestions on what to improve, any contributions you can make, and any errors I have made. Please feel free to [email me](mailto:haydencallum4@gmail.com) and I'll be in touch asap.