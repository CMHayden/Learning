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

OpenGL is a graphics API that compines pipelining and parallelism. OpenGL provides an abstraction layer between the applications and the underlying graphics subsystems (ie, graphics cards).

### Pipelines

#### Forward Rendering

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

Inverse rendering starts from the eye or camera position.

## TL;DR:

* OpenGL provides a good abstraction level for learning 3D computer graphics.
* Forward rendering is the simplest rendering pipeline and it works best for simpler scenes (ie, mobile applications, technical models or simulations).
* Deferred rendering is better suited for scenes with a lot of light sources (ie, games).
* Inverse rendering works best for offline scenes (ie, movies).
* We can convert models coordinates to screen locations using a series of transformation matrices.