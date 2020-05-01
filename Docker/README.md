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

## Contributing

Interested in contributing to this document? I'd love to hear any suggestions on what to improve, any contributions you can make, and any errors I have made. Please feel free to [email me](mailto:haydencallum4@gmail.com) and I'll be in touch asap.