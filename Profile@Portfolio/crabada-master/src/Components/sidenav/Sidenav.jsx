import "./sidenav.scss";
import home from "../../assets/images/icon_home.webp";
import battle from "../../assets/images/icon_battle.webp";
import download from "../../assets/images/icon_download.webp";
import roadmap from "../../assets/images/icon_roadmap.webp";
import { motion } from "framer-motion";

const Sidenav = () => {
  return (
    <motion.div
      initial={{ opacity: 0, x: 200 }}
      animate={{ opacity: 1, x: 0 }}
      id="sidenav"
    > 


<nav className="menu">
  <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
  <label class="menu-open-button" for="menu-open">
    <span class="hamburger hamburger-1"></span>
    <span class="hamburger hamburger-2"></span>
    <span class="hamburger hamburger-3"></span>
  </label>
  <a href="#" class="menu-item">   <img src={home} alt="" className="navLogo" /> </a>
  <a href="#" class="menu-item">   <img src={battle} alt="" className="navLogo" /> </a>
  <a href="#" class="menu-item">   <img src={download} alt="" className="navLogo" /> </a>
  <a href="#" class="menu-item">   <img src={roadmap} alt="" className="navLogo" /> </a>
  
</nav>
    </motion.div>
  );
};

export default Sidenav;
