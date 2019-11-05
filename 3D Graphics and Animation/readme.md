# 3D Graphics and Animation

Many concepts in computer graphics are based on fundamental Physichs concepts. For the purpose of 3D graphics it is simpler to think about light as photons. Light waves are used in certain physically correct reflection models but for 3D graphics it's easier to think about light as millions or billions of balls hitting sufaces and objects. If we do not show any light then it is just dark, meaning there is no collision between objects, materials, and light.

In theory, computer graphics are simple, but computationally expensive. Elements such as caustics, shadows, transparency, volumes, refraction, reflection, lights, and lenses add to this computational complexity. These are fine for offline 3D graphics such as movies, as they are only rendered once. You can also calculate the frames for as long as needed to achieve the required quality.

For real time graphics such as games, we cheat. We use optimisations, assumptions, tricks, shortcuts, approximations, and technology. This is done by adding 2D graphics on top of a 3D model, pre-rendering backgrounds, or adding lower detail to different parts. There are many other ways to cheat, but these are some good examples. To make real time graphics work, all we need is to see the interaction between the camera, object and the light. In a nutshell it can be understood as moving, calculating, and optimizing massive amounts of information.

## Stages of 3D Graphics

**Capture**

We can capture ideas through the use of sketches and drawings. To capture assets, we use photometry, photo scans, laser scans, textures, and light models.

**Modelling**

To represent geometry we use lines, splines, curvers, meshes, surface, planes, voxels, BSP, scene graphs... For procedural modelling we use fractals, sweeps, and mathematical and parametrical models.

**Animation**

To animate we use keyframes which can be artists, articulated, or skeleton. We can use motion capture for motion. Dynamics is animated with physical simulations, particle systems and kinematics. Behaviours are animated through learning and planning.

**Rendering**

When 3D rendering we use pipelines and do tasks such as modelling transformations, viewing transformations, hidden surface removal, light and shading, material texturing or shaders, clipping, scan conversions, hierarchical scenes and forward rending paths or deferred rendering. For global illumation we can use ray tracing, radiosity and physically correct rendering.

**Applications**

3D graphics have many uses, some of these are for entertainment, scientific visualisations, training, education, computer-aided design, art, e-commerce, tourism, navigation, and augmented reality.

## TL;DR:

* 3D Graphics are simple but computationally expensive.
* We achieve real-time graphics through various optimisations, cheats, trick, approximation and assumptions.
* 3D Graphics are well suited for parallel processing.
* The graphics stages can be summarized as capture, modelling, animation and rendering.
* ACM SIGGRAPH is the best source for the newest information.

---

## Drawing and Modelling Fundamentals

There are many types of graphics styles but the concepts for 3D are common to art, 3D art, and 3D graphics. For instance, in 3D graphics we focus on how light reflects and interacts with an object, how they move in the world and how they are scaled and composed. The ideas of light can be seen in art by Michelangelo, the Simoni and the David.

Graphics can be classical or modern. This is a skill that is mastered by practicing a lot. It is not about consumption, but about the creation of things.

All computer art is based in fundamental art concepts such as lines, shapes, volumes, values, and colours. If you want to draw you should master these elements.

Perspective is how we move from 2D to 3D.

In 3D Graphics, cameras handle the projection. They have many settings and values. These settings and values include the aperture, focal length, f stop, and focus distance amongst others.

Drawing/Modelling can be difficult, but it can be mastered. You must be aware of optical illusions such as foreshortening. Foreshortening is an illusion that makes distant objects look smaller in relation to closer objects. We need to think about objects using a 90 degree line of view, this is why there are many views in modelling packages.

Most objects can be created or represented from basic volumes. The more familiar you are with basic volumes the easier it gets. Practicing to draw these will help you compose various sketches. A few of these basic volumes are available in all modelling packages.

### Basic Lighting

The biggest challenge in drawing is to create the illusion of depth and three dimensional form. Just drawing a highlight is ok, but more realistic drawings can be taking into account all aspects of light including reflected bounced lights.

![Image of light on a ball](https://raw.githubusercontent.com/CMHayden/Learning/master/3D%20Graphics%20and%20Animation/images/light_example_01.png)

### Autodesk Maya

Maya is a 3D computer animation, modelling, simulation and rendering software. It is the industry standard modelling software as it is more stable than Blender and can run on both Macs and PCs.

### References

References aid in modelling by allowing you to add the references to your modelling package and get a better idea of how to model them.

## TL;DR:

* A lot of practice is needed to master the fundamental concepts of drawing.
* Modelling packages and tools use the same conceppts.
* Draw or research the object you want to model first.
* Practice fundamentals: select, move, rotate, and scale. 
* Use the reference sheet.

---

## Advanced Modelling

## TL;DR:

* Use references.
* You can modify and model the geometry.
* There are many ways to interact with the geometry.
* Practice with the various materials.
* Practice rendering.

---

## Real-time Graphics

While this is not an OpenGL course, OpenGL will be used to learn the fundamental concepts of graphics and animation. Once learnt, it will be easy to move between different tools.

### OpenGL

OpenGL is a graphics API that compines pipelining and parallelism. OpenGL provides an abstraction layer between the applications and the underlying graphics subsystems (ie, graphics cards). OpenGL uses forward rendering.

### Pipelines

Pipelines are the foundation of any visualization or rendering engine. It is where the rendering of all 3D objects, light sources, lighting models, textures, cameras, and more happens. Essentially, it is a conceptual model which describes the steps a graphics system needs to perform to render a 3D scene to a 2D screen.

Let's break down a graphics pipeline.

![Overview of graphics pipeline](https://raw.githubusercontent.com/CMHayden/Learning/master/3D%20Graphics%20and%20Animation/images/graphics_pipeline_overview.PNG)

* **Input data**: composed of information such as vertices, attributes, and instructions.

* **Vertex fetch**: provides inputs to the vertex shader as XYZ coordinates and attributes such as UV coordinates.

* **Vertex shader**: responsible for the position of the vertices and passing attributes to the next stages.

* **Tessellation control shader**: determines the level of tessellation that will be sent to the tessellation enginge, and the generation of data that will be sent to the tessellation engine shader that is run after tessellation occurrs. 

* **Tessellation engine**: breaks patches into points, lines or triangles. It produces parameters that are input to the evaluation shader.

* **Tessellation evaluation shader**: transforms the resulting primitives and get them ready for rasterization.

*Tessellation: used to manage datasets of polygons (vertex sets) presenting objects in a scene and divide them into suitable structures for rendering. Data is tessellated into triangles.* 

*Rasterisation: act of taking an image described in a vector graphics format (shapes) and converting it into a raster image (a series of pizels, dots or lines, which, when displayed together, create the image which was represented via shapes)*

* **Geometry shader**: has access to all input vertex information that makes the primitive being processed. They can increase or reduce the data flow and change it too. They also have access to vertices of primitives adjacent to the current one.

* **Clipping**: primitives that lie on the boundary between the inside of the viewing volume and the outside are split into several primitives, such that the entire primitive lies in the volume.

* **Culling**: removes back facing geometry - OpenGL works with right handed coordinates.

* **Rasterization**: determines which fragments are covered by a primitive such as lines or triangles. (OpenGL uses half-space-based triangle rasterisation methods - performed concurrently in parallel).

* **Fragment shader**: determines the colour of each fragment before it is sent to the framebuffer for composition.

* **Scissors tests**: fragments against a defined rectangle.

* **Stencil tests**: compares the stencil buffer with the content.

* **Depth test**: compares the fragment z coordinate against the content of the depth buffer (fragment order).

* **Output display**

In the example of a city, in the vertex shader we can manipulate the vertices in our model to create munition holes in the facades of the building. We can use geometry shaders to manipulate the geometric primatives of the buildings to create interesting destruction effects like splintering of corners. Using fragment shader allows us to change the fragments (colours) of the materials, following the example of a city we can render it in a toon shading to resemble it to old cartoons. Finally, the framebuffer can be sent back to the fragment shader to add an effect such as gloom or dusk to our city landscape.

#### Forward Rendering

Forward rendering calculates the final output starting from the objects and light sources in the scene. This type of pipeline calculates the light and material properties for each object and for every light source in the scene. As a result, we can assume the complexity of the rendering by the number of objects and lights in the scene.

The advantages of the forward rendering pipeline are that it can easily and quickly render geometrically complex scenes with simple light sources. It also produces frames that are consistent in quality as the final render depends on the geometry and light sources only. As so, this is the most common method used in real-time applications such as mobile games, online demonstrators, and simulations.

With forward rendering we calculate the graphics from the geometry to the pixels. The perfomance depends on the number of lights. This can be done:

```
For each object{
    Find all lights affecting object {
        render all lighting and material
    }
}
```

or

```
For each light {
    For each object {
        add lighting to frame buffer
    }
}
```

The forward rendering pipeline can render complex geometry using simple lights quite efficiently.

#### Inverse Rendering

Inverse rendering fundamentally calculates samples of every pizel for our final render output. It starts from the camera, eye, or screen view, and it then transverses the geometry of the scene to calculate the final output. This type of pipeline calculates samples of the light and material properties for each pixel. The complexity and efficiency of the pipeline depends mostly on the number of sample and pixels in the output scene.

The advantages of the inverse rendering pipeline are that it can easily calculate complex properties of scenes like caustics, reflections, and refractions that would be otherwise quite difficult to trace using a forward rendering pipeline. The disadvantage of this method is that the number of samples per pixel required to render a frame with consistent quality is unknown; as so, they are better suited for offline rendering (movies) where the frames are only rendered once to obtain the maximum realism or quality.

Inverse rendering starts from the eye or camera position. It is done like this:

```
For each pixel {
    sample light and materials
}
```

The performance depends on the number of pixels. It works well for complex materials. It produces more realistic, but not real time images.

## TL;DR:
* Forward Rendering Pipeline:
    * Simplest and easiest to understand.
    * Complexity dependent on light sources and geometry.
    * OpenGL, mobiles, and general applications.
* Deferred Rendering Pipeline:
    * Pushes light calculations to the framebuffer.
    * More advanced and uses more memory bandwidth.
    * Perfect for scenes with multiple lights.
* Inverse Rendering Pipeline:
    * Samples pixels instead of geometry.
    * Allows for more complex and realistic scenes.
    * Ray tracing, photon mapping, physically correct rendering.
    * Not used in real-time graphics.
* OpenGL provides a good abstraction level for learning 3D computer graphics.
* Forward rendering is the simplest rendering pipeline and it works best for simpler scenes (ie, mobile applications, technical models or simulations).
* Deferred rendering is better suited for scenes with a lot of light sources (ie, games).
* Inverse rendering works best for offline scenes (ie, movies).
* We can convert models coordinates to screen locations using a series of transformation matrices.

---

## Graphics and Animation Programming

C++ is used for graphics and games for three main reasons:

* **Speed**: C++'s design goal is performance. Well written code can be exceptionally fast. It allows for the use of assembly language.

* **Flexibility**: It is a multi-paradigm language, allowing for machine code, procedural programming and object oriented programming.

* **Support**: There are many libraries and assets for C++ games programming, such as graphics APIs, 2D, 3D, physichs libraries and engines.

For more information on C++, find [my c++ notes here](https://github.com/CMHayden/Learning/tree/master/C%2B%2B).

---

## Drawing

### Vertex Fetch

The vertex fetch stage is responsible for forming the inputs. Inputs can be:

* Geometry - data, type, etc.
* Attributes - positions, normal, texture coordinates, colours, materials, etc.

To create the vertex fetch, firstly we must initialise and bind a vertex array object. Once this is done, we generate a buffer, link it to the data, and bind it to the context. It is then passed some attributes (vertices positions), some uniforms on the render function, and draws the vertices. Here is how we do this with OpenGL in C++:

```c++
glGenVertexArrays(1, &vao);
glBindVertexArray(vao);

glGenBuffers(1, &buffer);
glBindBuffer(GL_ARRAY_BUFFER, buffer);
glBufferData(GL_ARRAY_BUFFER,
    sizeof(vertex_positions),
    vertex_positions,
    GL_STATIC_DRAW);

glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, NULL);
glEnableVertexAttribArray(0);

glUniformMatrix4fv(mv_location, 1, GL_FALSE, &mv_matrix[0][0]);

glDrawArrays(GL_TRIANGLES, 0, 36);
```

## TL;DR:

* Fetching geometry using VAO is the fastest.
* You can fetch the geometry by using indices (VBO).
* When using VBO you need to optimise the index to account for multiple attributes.
* Blender is a powerful modelling tool that can export OBJ files.

---

## Instancing

The main advantage of using instancing is that you only need to do one function call instead of looping many times through the draw function. Furthermore, less information gets transmitted between the CPU and GPU saving bandwidth. It is also possible to create different instances by manipulating each instance in the vertex shader.

For example, a forest, instancing would be useful as we can have just one instance of a tree and we can generate a whole forest by instancing it many times. In a complex forest, of say, a few hundred thousand trees, this will reduce the load in the CPU and the bandwidth between the CPU and GPU as we only need to send one tree model.

## Tessellating

The main advantage of tessellating is that it allows users to depict more (LOD) and new information from simple geometry. We can use methods like displacement mapping to improve the realism of our objects. Furthermore, using tellestation allows us to simplify the geometry we need to load, which would result in lower loads in the CPU, bandwidth, and loading times. For example, in a forest scene, we can use a simple model of a tree and tessellate this model different to render a forest were each tree looks different creating a more natural look to our scene. 

## TL;DR:

* Instancing allows us to draw similar geometry more efficiently.
* gl_InstanceID allows us to know which instance of the geometry we are drawing in the vertex shader.
* GLSL does not include rotation or translation matrices, so we need to implement them on our vertex shader code.