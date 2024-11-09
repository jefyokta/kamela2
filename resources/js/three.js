
import { Scene , WebGLRenderer , DirectionalLight, PerspectiveCamera , AmbientLight , Box3 ,Vector3} from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
import { DRACOLoader } from 'three/examples/jsm/loaders/DRACOLoader.js';

const render = (elementId, modelName) => {
  const container = document.getElementById(elementId);

  const scene = new Scene();
  const camera = new PerspectiveCamera(
    70,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
  );
  camera.position.set(20, 20, 30);

  const renderer = new WebGLRenderer({ alpha: true });
  renderer.setSize(window.innerWidth, window.innerHeight);
  container.appendChild(renderer.domElement);

  const controls = new OrbitControls(camera, renderer.domElement);
  controls.enableDamping = true;

  const directionalLight = new DirectionalLight(0xffffff, 1);
  directionalLight.position.set(5, 10, 7.5);
  scene.add(directionalLight);

  const ambientLight = new AmbientLight(0xffffff, 0.5);
  scene.add(ambientLight);

  const loadModel = async (model) => {
    const loader = new GLTFLoader();
    const dracoLoader = new DRACOLoader();
    dracoLoader.setDecoderPath(
      "https://www.gstatic.com/draco/versioned/decoders/1.5.6/"
    );
    loader.setDRACOLoader(dracoLoader);

    return new Promise((resolve, reject) => {
      loader.load(
        "/models/" + model ,
        (gltf) => {
          const model = gltf.scene;
          model.scale.set(1, 1, 1);
          model.position.set(0, 10, 0);
          resolve(model);
        },
        undefined,
        (error) => reject(error)
      );
    });
  };

  (async () => {
    try {
      const model = await loadModel(modelName);
      scene.add(model);

      const box = new Box3().setFromObject(model);
      const center = box.getCenter(new Vector3());
      controls.target.copy(center);
      controls.update();
    } catch (error) {
      console.error("Failed to load model:", error);
    }
  })(modelName);

  const animate = () => {
    requestAnimationFrame(animate);
    controls.update();
    renderer.render(scene, camera);
  };
  animate();

  window.addEventListener("resize", () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
  });
};

render("type66","types66.gltf");
render("type36","type362.gltf");

