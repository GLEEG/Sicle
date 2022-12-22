import "assets\\js\\form.js"
import * as THREE from 'three'
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js'
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js'

/**
 * Base
 */

// Canvas
const canvas = document.querySelector('canvas.webgl')

canvas.addEventListener('mousedown', (event) =>
{
    canvas.style.cursor = "grabbing"
})

canvas.addEventListener('mouseup', (event) =>
{
    canvas.style.cursor = "grab"
})

// Scene
const scene = new THREE.Scene()

/**
 * Models
 */
const logo = new THREE.Group()
scene.add(logo)

const gltfLoader = new GLTFLoader()

gltfLoader.load(
    'assets/models/logo.glb',
    (gltf) =>
    {
        const children = [...gltf.scene.children]

        for(const child of children)
        {
            child.material.color.set(0x272f38)
        }

        gltf.scene.scale.set(0.12, 0.12, 0.12)
        gltf.scene.rotateY(4)

        logo.add(gltf.scene)
    }
)

/**
 * Lights
 */
const ambientLight = new THREE.AmbientLight(0xffffff, 0.8)
scene.add(ambientLight)

const directionalLight = new THREE.DirectionalLight(0xffffff, 0.6)
directionalLight.castShadow = true
directionalLight.shadow.mapSize.set(1024, 1024)
directionalLight.shadow.camera.far = 15
directionalLight.shadow.camera.left = - 7
directionalLight.shadow.camera.top = 7
directionalLight.shadow.camera.right = 7
directionalLight.shadow.camera.bottom = - 7
directionalLight.position.set(5, 5, 5)
scene.add(directionalLight)

/**
 * Sizes
 */
const sizes = {
    width: 675,
    height: 800
}

window.addEventListener('resize', () =>
{
    // Update camera
    camera.aspect = sizes.width / sizes.height
    camera.updateProjectionMatrix()

    // Update renderer
    renderer.setSize(sizes.width, sizes.height)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
})

/**
 * Camera
 */
// Base camera
const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
camera.position.set(2, 0, 2)
scene.add(camera)

// Controls
const controls = new OrbitControls(camera, canvas)
controls.target.set(0, 0, 0)
controls.enableDamping = true
controls.enablePan = false
controls.dampingFactor = 0.03
controls.enableZoom = false

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer({
    canvas: canvas,
    alpha: true
})
renderer.shadowMap.enabled = true
renderer.shadowMap.type = THREE.PCFSoftShadowMap
renderer.setClearAlpha(0);
renderer.setSize(sizes.width, sizes.height)
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))

/**
 * Animate
 */
const clock = new THREE.Clock()

const tick = () =>
{
    const elapsedTime = clock.getElapsedTime()

    logo.rotation.y = - elapsedTime * 0.7

    // Update controls
    controls.update()

    // Render
    renderer.render(scene, camera)

    // Call tick again on the next frame
    window.requestAnimationFrame(tick)
}

tick()