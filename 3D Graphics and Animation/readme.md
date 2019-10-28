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

---

There are many types of graphics styles but the concepts for 3D are common to art, 3D art, and 3D graphics. For instance, in 3D graphics we focus on how light reflects and interacts with an object, how they move in the world and how they are scaled and composed. The ideas of light can be seen in art by Michelangelo, the Simoni and the David.
