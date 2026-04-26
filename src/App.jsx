import Navbar from './components/Navbar'
import Hero from './components/Hero'
import SponsorBar from './components/SponsorBar'
import FeatureCards from './components/FeatureCards'
import Ticker from './components/Ticker'
import CryptoAssets from './components/CryptoAssets'
import SatuAplikasi from './components/SatuAplikasi'
import Investasi from './components/Investasi'

function App() {
  return (
    <>
      <div className="super-container main-hero">
        <Navbar />
        <Hero />
      </div>

      <div className="sponsor">
        <SponsorBar />
        <FeatureCards />
        <Ticker />
      </div>

      <CryptoAssets />
      <SatuAplikasi />
      <Investasi />
    </>
  )
}

export default App
