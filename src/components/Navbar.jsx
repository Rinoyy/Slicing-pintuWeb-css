import { useState } from 'react'

const navLinks = ['Fitur', 'Trading', 'Edukasi', 'Lainnya']
const appTabs  = ['Pintu', 'Pro', 'Web3']

export default function Navbar() {
  const [activeTab, setActiveTab] = useState('Pintu')
  const [langOpen, setLangOpen]   = useState(false)

  return (
    <nav className="navbar navbar-expand-lg pt-3 pb-4">
      <div className="container-fluid navbar-inner">

        {/* Kiri: Logo + App Tabs */}
        <div className="d-flex align-items-center gap-3">
          <img src="/img/original.png" alt="Pintu" width="80" style={{ marginTop: '-4px' }} />
          <div className="d-none d-lg-flex">
            <div className="btn-button border">
              {appTabs.map(tab => (
                <button
                  key={tab}
                  className={`border-0 bg-transparent btn-navbar text-white ${activeTab === tab ? 'active' : ''}`}
                  onClick={() => setActiveTab(tab)}
                >
                  {tab}
                </button>
              ))}
            </div>
          </div>
        </div>

        {/* Hamburger */}
        <button
          className="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarContent"
          aria-controls="navbarContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span className="navbar-toggler-icon"></span>
        </button>

        {/* Kanan: Nav links + Download + Bahasa */}
        <div className="collapse navbar-collapse" id="navbarContent">
          <div className="d-flex flex-column flex-lg-row align-items-start align-items-lg-center ms-lg-auto gap-3 gap-lg-4 py-3 py-lg-0 fw-semibold">

            {navLinks.map(link => (
              <span key={link} className="hover-nav text-white" style={{ cursor: 'pointer' }}>
                {link}
              </span>
            ))}

            <div className="download-app-btn border rounded-pill px-3 py-2 text-center" style={{ cursor: 'pointer' }}>
              <span className="text-white fw-bolder">Download App</span>
            </div>

            {/* Pilihan Bahasa */}
            <div>
              <div
                className="bendera d-flex align-items-center gap-2"
                onClick={() => setLangOpen(o => !o)}
                style={{ cursor: 'pointer' }}
              >
                <img src="/img/bendera.png" alt="ID" width="22" height="16" className="rounded" />
                <i
                  className="bi bi-chevron-down text-white lang-chevron"
                  style={{ fontSize: '12px', transition: 'transform 0.2s', transform: langOpen ? 'rotate(180deg)' : 'rotate(0deg)' }}
                ></i>
              </div>

              {langOpen && (
                <div className="pt-2 pb-1">
                  <p className="text-white opacity-50 fw-bold mb-2" style={{ fontSize: '11px', letterSpacing: '1px' }}>
                    BAHASA
                  </p>
                  <a href="#" className="d-flex align-items-center gap-2 text-decoration-none mb-2">
                    <img src="/img/bendera.png" width="20" className="rounded-1" />
                    <span className="fw-bolder text-primary">INDONESIA</span>
                  </a>
                  <a href="#" className="d-flex align-items-center gap-2 text-decoration-none">
                    <img src="/img/inggris.png" width="20" className="rounded-1" />
                    <span className="fw-bold text-white opacity-75">ENGLISH</span>
                  </a>
                </div>
              )}
            </div>

          </div>
        </div>

      </div>
    </nav>
  )
}
