/*
 * Copyright (c) 1998-2012 Caucho Technology -- all rights reserved
 *
 * This file is part of Resin(R) Open Source
 *
 * Each copy or derived work must preserve the copyright notice and this
 * notice unmodified.
 *
 * Resin Open Source is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Resin Open Source is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE, or any warranty
 * of NON-INFRINGEMENT.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Resin Open Source; if not, write to the
 *
 *   Free Software Foundation, Inc.
 *   59 Temple Place, Suite 330
 *   Boston, MA 02111-1307  USA
 *
 * @author Scott Ferguson
 */

package com.caucho.i18n;

import com.caucho.config.ConfigException;
import com.caucho.loader.EnvironmentLocal;
import com.caucho.util.L10N;
import com.caucho.vfs.Encoding;

import javax.annotation.PostConstruct;

/**
 * Configuration for the character-encoding pattern.
 */
public class CharacterEncoding {
  private static final L10N L = new L10N(CharacterEncoding.class);

  private static final EnvironmentLocal<String> _localEncoding
    = new EnvironmentLocal<String>();

  private static final String _systemEncoding;

  private String _encoding;

  /**
   * Sets the name
   */
  public void setValue(String name)
  {
    _encoding = Encoding.getMimeName(name);
  }

  public static String getLocalEncoding()
  {
    String encoding = _localEncoding.get();

    if (encoding != null)
      return encoding;
    else
      return _systemEncoding;
  }

  /**
   * Initialize the resource.
   */
  @PostConstruct
  public void init()
    throws Exception
  {
    if (_encoding == null)
      throw new ConfigException(L.l("character-encoding requires a 'value' attribute with the character encoding."));

    _localEncoding.set(_encoding);
  }

  public String toString()
  {
    return getClass().getSimpleName() + "[" + _encoding + "]";
  }

  static {
    String encoding = System.getProperty("file.encoding");

    if (encoding != null)
      encoding = Encoding.getMimeName(encoding);
    else
      encoding = "utf-8";

    _systemEncoding = encoding;
  }
}

